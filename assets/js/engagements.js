// Engagements renderer — reads assets/data/engagements.json, photos local.
// Listing: #eng-grid (cards) + #eng-table (track record, incl. listed_only)
// Detail: engagement.html?slug=xxx → #eng-detail + #eng-gallery (from photos.json manifest)
(function(){
  const grid = document.getElementById('eng-grid');
  const table = document.getElementById('eng-table');
  const detail = document.getElementById('eng-detail');
  const gallery = document.getElementById('eng-gallery');
  const count = document.getElementById('eng-count');
  if(!grid && !detail) return;

  const params = new URLSearchParams(location.search);
  const slug = params.get('slug');
  const filterBtns = [...document.querySelectorAll('[data-filter]')];
  let all = [];

  fetch('assets/data/engagements.json').then(r=>r.json()).then(data=>{
    all = (data.engagements||[]).filter(e=>e.status==='published');
    const cards = all.filter(e=>!e.listed_only);
    if(count) count.textContent = `I've put ${all.length} sessions on record — ${cards.length} with photo reels, archive growing`;
    if(grid) renderGrid('all');
    if(table) renderTable();
    if(detail && slug){
      const e = all.find(x=>x.slug===slug) || cards[0];
      if(e) renderDetail(e);
    }
    filterBtns.forEach(b=>b.addEventListener('click',()=>{
      filterBtns.forEach(x=>x.classList.remove('!border-[var(--ember)]','!text-white'));
      b.classList.add('!border-[var(--ember)]','!text-white');
      renderGrid(b.dataset.filter);
    }));
  }).catch(()=>{ if(grid) grid.innerHTML = '<p class="opacity-60 text-sm">Gagal load engagements.json — check path.</p>'; });

  function badge(e){
    const d = (e.date_end && e.date_end!==e.date_start) ? `${fmt(e.date_start)} – ${fmt(e.date_end)}` : (e.date_note || fmt(e.date_start));
    return `${e.type_ms||e.type} · ${d}`;
  }
  function fmt(iso){ if(!iso) return ''; const d=new Date(iso+'T00:00:00'); return d.toLocaleDateString('en-GB',{day:'numeric',month:'short',year:'numeric'}); }

  function renderGrid(f){
    const list = all.filter(e=>!e.listed_only && (f==='all' || e.type===f));
    list.sort((a,b)=>(b.featured?1:0)-(a.featured?1:0));
    grid.innerHTML = list.map(e=>`
      <a href="engagement.html?slug=${e.slug}" class="border border-[var(--line)] group block overflow-hidden" style="opacity:1">
        <div class="ph aspect-[16/10] !border-0">
          <img loading="lazy" src="${e.cover}" onerror="this.onerror=null;this.src='https://picsum.photos/seed/${e.slug}/1200/750'" alt="${e.title}">
          <div class="ph-label"><span>${e.org} · ${badge(e)}</span><i>REEL →</i></div>
        </div>
        <div class="p-7">
          <p class="chapter-num">${badge(e)}</p>
          <h3 class="serif italic text-2xl mt-2 group-hover:text-[var(--gold)] transition">${e.title}</h3>
          <p class="text-sm opacity-70 mt-2">${e.org} · ${e.venue}</p>
          <p class="mono text-[10px] tracking-[.2em] uppercase mt-4 opacity-60">Lihat galeri →</p>
        </div>
      </a>`).join('') || '<p class="opacity-60 text-sm">Belum ada reel untuk kategori ni.</p>';
    if(window.gsap) gsap.from(grid.children,{opacity:0,y:24,duration:.7,stagger:.06,ease:'power3.out'});
  }

  function renderTable(){
    const rows = [...all].sort((a,b)=>(b.date_start||'').localeCompare(a.date_start||''));
    table.innerHTML = `
      <div class="grid grid-cols-12 gap-2 mono text-[10px] tracking-[.2em] uppercase opacity-50 pb-3 px-2">
        <span class="col-span-4 md:col-span-3">Client / Org</span>
        <span class="col-span-5 md:col-span-5">Program</span>
        <span class="hidden md:block md:col-span-2">Jenis</span>
        <span class="col-span-3 md:col-span-2 text-right">Bila</span>
      </div>` + rows.map(e=>{
      const inner = `
        <span class="col-span-4 md:col-span-3 font-medium">${e.org}</span>
        <span class="col-span-5 md:col-span-5 opacity-80">${e.title}</span>
        <span class="hidden md:block md:col-span-2 opacity-60">${e.type_ms||e.type}</span>
        <span class="col-span-3 md:col-span-2 text-right opacity-60">${e.date_note || fmt(e.date_start)}</span>`;
      const cls = "trow grid grid-cols-12 gap-2 items-baseline px-2 py-4 text-sm";
      return e.listed_only
        ? `<div class="${cls}">${inner}</div>`
        : `<a href="engagement.html?slug=${e.slug}" class="${cls} transition">${inner}</a>`;
    }).join('');
  }

  function renderDetail(e){
    detail.innerHTML = `
      <p class="eyebrow">${e.org} · ${e.type_ms||e.type}</p>
      <h1 class="h-display text-[clamp(2.2rem,6vw,5rem)] mt-4">${e.title}</h1>
      ${e.title_en?`<p class="serif italic text-xl opacity-70 mt-3">${e.title_en}</p>`:''}
      <div class="slate mt-8 py-4 flex flex-wrap gap-x-8 gap-y-2 justify-between">
        <span>${e.date_end&&e.date_end!==e.date_start?fmt(e.date_start)+' – '+fmt(e.date_end):(e.date_note||fmt(e.date_start))}</span>
        <span>${e.venue}</span><span>${e.lang||''}</span>
      </div>
      <p class="lede mt-8">${e.tagline?`<strong class="text-[var(--bone)]">${e.tagline}</strong> — `:''}${e.audience}</p>
      ${(e.outcomes&&e.outcomes.length)||(e.modules&&e.modules.length)?`
      <div class="grid md:grid-cols-2 gap-6 mt-8">
        ${(e.outcomes&&e.outcomes.length)?`<div class="border border-[var(--line)] p-7"><p class="chapter-num">Apa anda bawa pulang</p><ul class="mt-4 space-y-3 text-sm opacity-80">${e.outcomes.map(o=>`<li>→ ${o}</li>`).join('')}</ul></div>`:''}
        ${(e.modules&&e.modules.length)?`<div class="border border-[var(--line)] p-7"><p class="chapter-num">Modul</p><ul class="mt-4 space-y-3 text-sm opacity-80">${e.modules.map(o=>`<li>→ ${o}</li>`).join('')}</ul></div>`:''}
      </div>`:''}`;
    // gallery from local manifest
    gallery.innerHTML = '<p class="opacity-50 text-sm col-span-full">Memuatkan galeri…</p>';
    fetch(`assets/img/engagements/${e.slug}/photos.json`).then(r=>r.json()).then(m=>{
      const files = m.photos || [];
      document.getElementById('eng-photocount').textContent = `${files.length} frames — I shot on location, full colour, no staging`;
      gallery.innerHTML = files.map((f,i)=>`
        <div class="ph aspect-[4/3]"><img loading="lazy" src="assets/img/engagements/${e.slug}/${f}" alt="${e.title} — still ${i+1}">
        <div class="ph-label"><span>${String(i+1).padStart(2,'0')} / ${files.length}</span><i>${i===0?'COVER':'LIVE'}</i></div></div>`).join('');
    }).catch(()=>{
      gallery.innerHTML = `<div class="ph aspect-[4/3]"><img src="${e.cover||''}" alt=""></div>`;
    });
  }
})();
