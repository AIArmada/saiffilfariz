// Matrix rain — bright heads over fading trails (authentic technique:
// each frame paints one bright glyph per column; the translucent
// fade does the trailing automatically, so every cell keeps its glyph).
// Pauses off-tab + honors reduced-motion. Capped DPR for perf.
(function(){
  if(matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  const cv = document.getElementById('matrixrain');
  if(!cv) return;
  const ctx = cv.getContext('2d');
  const GLYPHS = 'アイウエオカキクケコサシスセソ0123456789Z:.+=*<>$#';
  const FS = 15;
  let cols, drops, W, H;
  function size(){
    const dpr = Math.min(devicePixelRatio || 1, 1.5);
    W = innerWidth; H = innerHeight;
    cv.width = W * dpr; cv.height = H * dpr;
    cv.style.width = W + 'px'; cv.style.height = H + 'px';
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    ctx.fillStyle = '#0C0B09';
    ctx.fillRect(0, 0, W, H);
    cols = Math.ceil(W / FS);
    drops = Array.from({length: cols}, () => Math.random() * -60);
  }
  size();
  let t = null;
  addEventListener('resize', size);
  ctx.font = FS + 'px "JetBrains Mono", monospace';
  function frame(){
    ctx.fillStyle = 'rgba(12,11,9,0.10)';
    ctx.fillRect(0, 0, W, H);
    for(let i = 0; i < cols; i++){
      const ch = GLYPHS[(Math.random() * GLYPHS.length) | 0];
      // rare mid-green head, usually near-white phosphor head
      ctx.fillStyle = Math.random() > 0.93 ? '#00D957' : '#DEE8DC';
      ctx.fillText(ch, i * FS, drops[i] * FS);
      if(drops[i] * FS > H && Math.random() > 0.976) drops[i] = 0;
      drops[i] += 0.45 + Math.random() * 0.85;
    }
    t = requestAnimationFrame(frame);
  }
  document.addEventListener('visibilitychange', ()=>{
    if(document.hidden){ cancelAnimationFrame(t); t = null; }
    else if(!t){ t = requestAnimationFrame(frame); }
  });
  t = requestAnimationFrame(frame);
})();
