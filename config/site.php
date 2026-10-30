<?php

/*
|--------------------------------------------------------------------------
| Site content
|--------------------------------------------------------------------------
| One place for the things that appear on more than one page. If a number
| lives here it can only be wrong once.
|
| The four figures below are deliberately checkable rather than aggregate.
| Replace them with your own verified numbers — but keep them here, not in
| the templates.
|
*/

return [

    'positioning' => [
        'name' => 'Connected intelligence',
        'themes' => 'AI · Business · People',
        'description' => 'Saiffil Fariz connects technology, business and people — turning complex ideas into things people can understand, use and grow with.',
        'bio' => 'I connect technology, business and people through speaking, training, consulting, software and creative work — turning complex ideas into things people can understand, use and grow with.',
        'promise' => 'Complexity made useful. Ideas turned into action. People kept at the centre.',
    ],

    'socials' => [
        ['label' => 'Facebook', 'url' => 'https://www.facebook.com/saiffilfariz', 'icon' => 'images/social-media-icons/facebook.svg'],
        ['label' => 'Instagram', 'url' => 'https://www.instagram.com/saiffilfariz/', 'icon' => 'images/social-media-icons/instagram.svg'],
        ['label' => 'TikTok', 'url' => 'https://www.tiktok.com/@saiffilfariz', 'icon' => 'images/social-media-icons/tiktok.svg'],
        ['label' => 'Threads', 'url' => 'https://www.threads.com/@saiffilfariz', 'icon' => 'images/social-media-icons/threads.svg'],
        ['label' => 'X', 'url' => 'https://x.com/saiffilfariz', 'icon' => 'images/social-media-icons/x.svg'],
    ],

    'creations' => [
        'concert' => [
            'name' => 'Konsert KITA',
            'subtitle' => 'Suara Anti Buli',
            'track' => 'Kita Bersama',
            'duration' => '4:57',
            'audio' => 'audio/kita-bersama.mp3',
            'waveform' => 'images/creations/kita-bersama-waveform.svg',
            'artwork' => 'images/creations/konsert-kita.webp',
            'url' => 'https://nusavue.net',
        ],
        'websites' => [
            ['slug' => 'ikon', 'name' => 'IKON Aspirasi Pahang', 'type' => 'Campaign, voting & original song', 'description' => 'Give the next generation of talent a stage of its own. IKON Aspirasi Pahang brings the campaign journey, 20 finalist profiles and public voting into one place people can follow, explore and return to. I also created “Ini Masa Kita” for ikonofficial.com, adding a musical piece to the campaign.', 'image' => 'images/projects/ikon.jpg', 'url' => 'https://ikonofficial.com/'],
            ['slug' => 'zunita', 'name' => 'DUN Pilah', 'type' => 'Community & public service', 'description' => 'Make it easier for people to find the help they need. A public service hub bringing the representative’s profile, local initiatives, community information and service centre together.', 'image' => 'images/projects/zunita.jpg', 'url' => 'https://zunita.my'],
            ['slug' => 'ilmu360', 'name' => 'ilmu360°', 'type' => 'Learning & discovery', 'description' => 'The next meaningful majlis can be hard to discover. ilmu360° brings events, speakers, institutions and topics into one searchable place, helping people find a gathering worth showing up for.', 'image' => 'images/projects/ilmu360.jpg', 'url' => 'https://ilmu360.com'],
            ['slug' => 'kod', 'name' => 'KOD', 'type' => 'Links & action', 'description' => 'Give a short word somewhere useful to take you. KOD turns a memorable word into an editable action hub for links, calls, QR access and engagement signals, ready to change as a campaign or business changes.', 'image' => 'images/projects/kod.jpg', 'url' => 'https://kod.to'],
        ],
        'stories' => [
            'konsert-kita' => [
                'name' => 'Konsert KITA',
                'eyebrow' => 'Music · cause · digital experience',
                'headline' => 'A song for standing together. A concert built to bring people with it.',
                'intro' => '“Kita Bersama” was made for Buli Konsert, a concert bringing people together around an anti-bullying message. I made the music and built the experience that helped people discover the event and get there.',
                'image' => 'images/creations/konsert-kita.webp',
                'image_alt' => 'Konsert KITA artwork for the Suara Anti Buli concert',
                'url' => 'https://nusavue.net',
                'url_label' => 'Explore the concert experience',
                'audio' => 'audio/kita-bersama.mp3',
                'track' => 'Kita Bersama',
                'duration' => '4:57',
                'waveform' => 'images/creations/kita-bersama-waveform.svg',
                'related' => ['slug' => 'nusavue', 'label' => 'Inside the ticketing system'],
                'partner' => 'The music and the web experience belong to the same cause.',
                'journey' => [
                    ['number' => '01', 'title' => 'Hear the message', 'text' => 'An original song gives the anti-bullying message a voice people can carry with them.'],
                    ['number' => '02', 'title' => 'Find the event', 'text' => 'The concert site brings the story, programme and ticket journey together.'],
                    ['number' => '03', 'title' => 'Be there', 'text' => 'The experience continues from the screen into a shared live event.'],
                ],
                'sections' => [
                    ['label' => 'The idea', 'title' => 'Some messages need more than one medium.', 'text' => 'A concert can gather people in one place. A song can stay with them after they leave. The web experience gives both a clear way to meet their audience.'],
                    ['label' => 'My part', 'title' => 'I made the music and the digital front door.', 'text' => 'I created “Kita Bersama” for the concert and built its promotional and ticketing experience through Nusavue. One project, moving between sound, story and software.'],
                ],
            ],
            'nusavue' => [
                'name' => 'Nusavue · Konsert KITA',
                'eyebrow' => 'Event platform · promotion · ticketing',
                'headline' => 'The concert starts before the first song.',
                'intro' => 'From choosing where to sit to finding a ticket on event day, I built the digital journey around Konsert KITA. A vivid event site, an interactive seat map and a cart that makes every choice clear.',
                'image' => 'images/projects/nusavue-event-desktop.jpg',
                'image_width' => 1440,
                'image_height' => 900,
                'image_alt' => 'Konsert KITA event page with its ticket call to action',
                'url' => 'https://nusavue.net',
                'url_label' => 'Visit Nusavue',
                'related' => ['slug' => 'konsert-kita', 'label' => 'Hear the song made for this event'],
                'partner' => 'One connected experience: discover the concert, choose your place, keep your ticket and arrive.',
                'journey' => [
                    ['number' => '01', 'title' => 'Discover', 'text' => 'Event details and the campaign give people a reason and a clear path to attend.'],
                    ['number' => '02', 'title' => 'Choose', 'text' => 'Guests explore the venue map, choose a seat and see the booking summary update. A timed hold keeps the selection for checkout.'],
                    ['number' => '03', 'title' => 'Attend', 'text' => 'Ticket lookup and downloads help guests recover their tickets. QR verification supports checking and admitting a ticket at the door.'],
                ],
                'screenshots' => [
                    [
                        'image' => 'images/projects/nusavue-ticketing.jpg',
                        'width' => 1440,
                        'height' => 1322,
                        'alt' => 'Konsert KITA ticket booking page with its event seat sections',
                        'label' => 'Choose a section',
                        'title' => 'Where do you want to be?',
                        'text' => 'The venue becomes part of the invitation. Guests explore the room and choose the concert experience that feels right for them.',
                        'details' => ['Standing, seated and VIP experiences', 'A visual venue layout', 'A clear path into seat selection'],
                    ],
                    [
                        'image' => 'images/projects/nusavue-seat-map-cart.jpg',
                        'width' => 1440,
                        'height' => 2141,
                        'alt' => 'Interactive Sapphire seating map with seat H2 selected, a collector ticket and RM414 total',
                        'label' => 'Seats & cart',
                        'title' => 'Your seat. Your keepsake. Your total.',
                        'text' => 'Tap a seat and the booking comes together around it. The map, selected seats and cart stay connected, right down to the optional collector ticket.',
                        'details' => ['A live map of available and selected seats', 'A 15-minute hold while guests check out', 'Optional collector tickets, itemized in the total'],
                    ],
                    [
                        'image' => 'images/projects/nusavue-ticket-lookup.jpg',
                        'width' => 1444,
                        'height' => 1692,
                        'alt' => 'Nusavue ticket lookup page with ticket number search and event artwork',
                        'label' => 'Find your ticket',
                        'title' => 'Ready when the day arrives.',
                        'text' => 'The experience continues after booking. A dedicated ticket lookup gives guests a clear way back to their ticket when it is time to go.',
                        'details' => ['A dedicated ticket number search', 'A return point for ticket details', 'Connected to the same event experience'],
                    ],
                ],
                'sections' => [
                    ['label' => 'The problem', 'title' => 'A ticket purchase is a chain of small promises.', 'text' => 'The seat shown should be available. The selection should remain theirs while they pay. The ticket should be findable later, and the entrance team should be able to verify it.'],
                    ['label' => 'The build', 'title' => 'The experience keeps its place from first visit to event day.', 'text' => 'The public event pages lead into seat selection, expiring holds and checkout. After purchase, people can look up or download tickets; signed QR details can be checked and marked at entry.'],
                    ['label' => 'The detail', 'title' => 'A seat map turns ticket buying into part of the event.', 'text' => 'Guests can see available and selected seats, then watch the booking summary follow their choice. An optional limited-edition collector ticket adds a physical keepsake. The 15-minute hold and QR check-in connect that polished guest journey to the work at the entrance.'],
                ],
            ],
            'zunita' => [
                'name' => 'DUN Pilah · Zunita',
                'eyebrow' => 'Public information · community services',
                'headline' => 'A public website should help someone do something next.',
                'intro' => 'I brought the public information around DUN Pilah together with pathways to local initiatives and community services, so visitors can move from learning about the work to finding the help or information they need.',
                'image' => 'images/projects/zunita.jpg',
                'image_alt' => 'DUN Pilah public website built for Zunita',
                'url' => 'https://zunita.my',
                'url_label' => 'Visit Zunita.my',
                'partner' => 'A public-facing platform with real service journeys behind it.',
                'journey' => [
                    ['number' => '01', 'title' => 'Understand', 'text' => 'Find the representative, local initiatives, service information and public updates in Malay or English.'],
                    ['number' => '02', 'title' => 'Apply', 'text' => 'A guided aid application collects the details and supporting information needed to review a request.'],
                    ['number' => '03', 'title' => 'Follow up', 'text' => 'A reference number lets an applicant return to check progress and continue the conversation.'],
                ],
                'sections' => [
                    ['label' => 'The challenge', 'title' => 'Useful information is only useful when people can find their way through it.', 'text' => 'Representative profiles, local programmes and help services answer different questions. They need to feel connected while remaining easy to scan and understand.'],
                    ['label' => 'The system', 'title' => 'Public information leads into a working application process.', 'text' => 'The site pairs bilingual information and community-service content with an aid application flow. Applicants receive a reference and can check status or send a follow-up message.'],
                    ['label' => 'The care', 'title' => 'People should not have to start from zero to ask what happened.', 'text' => 'A trackable reference gives the applicant a return point. The application record and status journey support the team handling requests behind the scenes.'],
                ],
            ],
            'kod' => [
                'name' => 'KOD',
                'eyebrow' => 'Product · routing · QR experiences',
                'headline' => 'A memorable word can open the right action, wherever the campaign goes next.',
                'intro' => 'KOD turns short, human-readable codes into routes to useful actions. A code can lead to a web destination or another configured action; a Hub gathers related destinations into one branded place.',
                'image' => 'images/projects/kod.jpg',
                'image_alt' => 'KOD short-code product experience',
                'url' => 'https://kod.to',
                'url_label' => 'Explore KOD',
                'partner' => 'Short codes and QR links are familiar. KOD’s take is to make the code an editable action and a way to organize related destinations.',
                'journey' => [
                    ['number' => '01', 'title' => 'Choose a code', 'text' => 'A short, memorable address is easier to say, print and share than a long destination URL.'],
                    ['number' => '02', 'title' => 'Set the action', 'text' => 'Connect that address to a configured destination or action, with secure routes available when needed.'],
                    ['number' => '03', 'title' => 'Bring related routes together', 'text' => 'A Hub groups related codes into a single branded landing experience, including visits from links and QR scans.'],
                ],
                'sections' => [
                    ['label' => 'The familiar part', 'title' => 'The world already knows how to use a short link.', 'text' => 'KOD does not need a “first ever” claim to be useful. The interesting work is in what the short address can represent, how related routes fit together and how those destinations can change with the work.'],
                    ['label' => 'The design choice', 'title' => 'Treat the code as a small, manageable product surface.', 'text' => 'A KOD can resolve through a configured action. A Hub can collect child codes, ordering, logos and presentation into one shareable destination. QR access becomes another way into the same system.'],
                    ['label' => 'Why it matters', 'title' => 'Print once. Keep the destination useful as the work changes.', 'text' => 'A campaign, profile or service can use a concise address across signs and materials, then update where that address leads without replacing every printed copy.'],
                ],
            ],
            'ikon' => [
                'name' => 'IKON Aspirasi Pahang',
                'eyebrow' => 'Campaign · profiles · public voting · original song',
                'headline' => 'Give a new generation of talent a campaign people can take part in.',
                'intro' => 'IKON Aspirasi Pahang brings a public campaign, its finalists and the voting experience into one vivid destination—giving supporters somewhere to discover the candidates and make their choice.',
                'image' => 'images/projects/ikon.jpg',
                'image_alt' => 'IKON Aspirasi Pahang campaign website with finalist profiles and public voting',
                'url' => 'https://ikonofficial.com/',
                'url_label' => 'Visit IKON Aspirasi Pahang',
                'partner' => 'A campaign experience people can take part in, with an original song created for ikonofficial.com.',
                'audio' => 'audio/ini-masa-kita.mp3',
                'track' => 'Ini Masa Kita',
                'duration' => '1:52',
                'waveform' => 'images/creations/ikon-waveform.png',
                'journey' => [
                    ['number' => '01', 'title' => 'Meet the finalists', 'text' => 'A dedicated profile gives each selected talent room to be seen.'],
                    ['number' => '02', 'title' => 'Follow the campaign', 'text' => 'The programme and key information keep the event journey in one place.'],
                    ['number' => '03', 'title' => 'Take part', 'text' => 'Public voting turns the audience from visitors into participants.'],
                ],
                'sections' => [
                    ['label' => 'The opportunity', 'title' => 'A talent campaign should make its people easy to discover.', 'text' => 'When a programme is built around emerging talent, the audience needs a clear way to learn who is taking part and how to support them.'],
                    ['label' => 'The experience', 'title' => 'The website gives the campaign a place to gather.', 'text' => 'The visual campaign, finalist profiles and voting journey work together as one public experience. The audience can explore the people behind the programme before choosing.'],
                    ['label' => 'The song', 'title' => 'Ini Masa Kita brings the campaign into music.', 'text' => 'Created for ikonofficial.com, the song gives the IKON project a musical expression alongside the website.'],
                    ['label' => 'The craft', 'title' => 'A strong campaign has to hold attention and make the next action obvious.', 'text' => 'The design gives the event its own atmosphere while keeping the practical steps visible: find the programme, discover a finalist and take part.'],
                ],
            ],
            'ilmu360' => [
                'name' => 'ilmu360°',
                'eyebrow' => 'Event discovery · learning · community',
                'headline' => 'Make the next worthwhile gathering easier to find.',
                'intro' => 'ilmu360° is built around a simple discovery problem: meaningful talks and gatherings can be difficult to find when details are scattered. The platform brings events, speakers, institutions and topics into one place to explore.',
                'image' => 'images/projects/ilmu360.jpg',
                'image_alt' => 'ilmu360° event discovery website',
                'url' => 'https://ilmu360.com',
                'url_label' => 'Visit ilmu360°',
                'partner' => 'A discovery platform for learning beyond the classroom.',
                'journey' => [
                    ['number' => '01', 'title' => 'Browse', 'text' => 'See gatherings and talks from different organizers in one discovery space.'],
                    ['number' => '02', 'title' => 'Find your thread', 'text' => 'Explore speakers, institutions and subjects that connect with what you care about.'],
                    ['number' => '03', 'title' => 'Show up', 'text' => 'Move from finding an event to deciding which room, conversation or community to join.'],
                ],
                'sections' => [
                    ['label' => 'The gap', 'title' => 'Good events are easy to miss when every organiser has a different doorway.', 'text' => 'A talk can be valuable and still struggle to reach the right people. Discovery improves when the gathering, its speakers and its subject can be found together.'],
                    ['label' => 'The product', 'title' => 'One place to look across events, people and ideas.', 'text' => 'ilmu360° connects event discovery with speakers, institutions and topics, giving visitors more than a list of dates to scroll past.'],
                    ['label' => 'The invitation', 'title' => 'The best result is a room with the right people in it.', 'text' => 'The platform is designed to help people find a reason to attend: a question they care about, a speaker they want to hear or a community they want to meet.'],
                ],
            ],
        ],
    ],

    'services' => [
        'speaking-service' => [
            'title' => 'Speaking',
            'action' => 'Invite me to speak',
            'anchor' => 'book',
            'summary' => 'A clearer view of AI and what your people can do next.',
            'description' => 'Talks and workshops for companies, agencies and universities. I explain what AI can and cannot do, drawing on experience in software, business and teaching.',
            'image' => 'work-large-audience',
            'alt' => 'Saiffil speaking to a large audience',
            'cta' => 'Explore speaking',
            'meta' => 'Keynotes, workshops and guest lectures.',
        ],
        'programmes' => [
            'title' => 'Programmes',
            'action' => 'Join a programme',
            'anchor' => '',
            'summary' => 'Practical learning built around real tasks.',
            'description' => 'Practical classes and team programmes that turn understanding into capability. Bring a real task and leave with work started, useful feedback and a way to keep going.',
            'image' => 'editorial-learning-practice-v1',
            'alt' => 'Learners working through a practical exercise together',
            'cta' => 'Explore the programmes',
            'meta' => 'Individual and team learning.',
        ],
        'consulting' => [
            'title' => 'Consulting',
            'action' => 'Work through a business problem',
            'anchor' => '',
            'summary' => 'AI, processes and systems shaped around your team.',
            'description' => 'Find where AI or a better process can help, try a useful first version and make the improvement part of everyday work. The people who use it stay involved throughout.',
            'image' => 'work-executive-workshop',
            'alt' => 'A workshop in progress around a boardroom table',
            'cta' => 'Explore consulting',
            'meta' => 'Advice, sprints and implementation.',
        ],
        'build' => [
            'title' => 'Software & systems',
            'action' => 'Build a website or system',
            'anchor' => '',
            'summary' => 'Websites, applications, custom systems and integrations.',
            'description' => 'Turn an idea or a process into a website, application or custom system. Connect the tools you use and automate the repeated steps that slow people down.',
            'screenshot' => 'images/projects/ikon.jpg',
            'alt' => 'The IKON Aspirasi Pahang campaign website built by Saiffil',
            'cta' => 'Explore software services',
            'meta' => 'From first idea to working product.',
        ],
    ],

    'facts' => [
        ['value' => '1988', 'label' => 'first contact with technology', 'note' => 'VTech Talking WhizKid'],
        ['value' => '100+', 'label' => 'talks and workshops', 'note' => 'Malaysia and the region'],
        ['value' => '300+', 'label' => 'organisations', 'note' => 'public, private, academic'],
        ['value' => '9', 'label' => 'universities', 'note' => 'guest lectures and programmes'],
    ],

    /*
    | The four connected worlds. Routes are resolved in templates so this
    | file stays free of route() calls (config must load without routes).
    */
    'worlds' => [
        [
            'name' => 'Technology',
            'line' => 'Systems, software, AI and automation that do real work.',
            'route' => 'build',
            'anchor' => null,
            'accent' => '#8FA8FF',
        ],
        [
            'name' => 'Business',
            'line' => 'Ventures, strategy and the unglamorous work of making things last.',
            'route' => 'consulting',
            'anchor' => null,
            'accent' => '#E1BB7C',
        ],
        [
            'name' => 'People',
            'line' => 'Talks, teaching and teams that leave with something they can use.',
            'route' => 'speaking-service',
            'anchor' => null,
            'accent' => '#7FD1C9',
        ],
        [
            'name' => 'Creativity',
            'line' => 'Music, film and experiments that carry ideas further.',
            'route' => 'creations',
            'anchor' => null,
            'accent' => '#E8A37E',
        ],
    ],

    'signature_topics' => [
        [
            'name' => 'AI literacy',
            'line' => 'What AI can do today, what it still gets wrong, and how to tell the difference before you spend money.',
            'for' => 'Leaders and mixed audiences',
        ],
        [
            'name' => 'AI for business',
            'line' => 'Where AI pays for itself: five everyday jobs most teams can improve this quarter, worked live on examples close to your own.',
            'for' => 'Teams and decision makers',
        ],
        [
            'name' => 'Smart workflow',
            'line' => 'From scattered tools to a calmer way of working: pick one slow process and make it measurably better.',
            'for' => 'Operations teams',
        ],
        [
            'name' => 'Creative AI',
            'line' => 'Making with machines: music, film and honest experiments in what the tools change and what they do not.',
            'for' => 'Creatives and educators',
        ],
        [
            'name' => 'Digital transformation',
            'line' => 'Why projects stall even when the software works, and the four questions that tell you early whether yours will stick.',
            'for' => 'Leaders',
        ],
    ],

    /*
    | Learning paths for Ideas: beginner, practical, deep. Destinations are
    | route names resolved in templates.
    */
    'learning_paths' => [
        [
            'name' => 'Understand AI',
            'step' => 'Start here',
            'line' => 'Short reads on how I think about AI, in plain language.',
            'route' => 'ideas',
            'params' => ['pillar' => 'education'],
        ],
        [
            'name' => 'Use it at work',
            'step' => 'Go practical',
            'line' => 'Small classes built around a real task from your job.',
            'route' => 'programmes',
            'params' => [],
        ],
        [
            'name' => 'Build with it',
            'step' => 'Go deeper',
            'line' => 'Software and systems shaped around the way your team works.',
            'route' => 'build',
            'params' => [],
        ],
    ],

    'media_kit' => [
        'short_bio' => 'Saiffil Fariz connects technology, business and people. He gives talks and workshops on practical AI, runs small hands-on programmes, and builds websites, applications and custom systems. He also makes music and films.',
        'long_bio' => 'Saiffil Fariz had his first contact with technology in 1988, a VTech Talking WhizKid, and went online in 1996. Since then he has built websites and systems, run a small company, and taught in classrooms, workshops and boardrooms across Malaysia and the region. Today he connects AI, business and people through speaking, training, consulting, software and creative work — always starting with the people and the work, not the tool.',
        'portrait' => 'profile-metallicgold',
        'portrait_alt' => 'Saiffil Fariz in a gold blazer',
        'press_portraits' => [
            ['slug' => 'metallicgold', 'label' => 'Signature gold', 'use' => 'Keynotes, posters and feature slots.'],
            ['slug' => 'charcoalgrey', 'label' => 'Formal grey', 'use' => 'Corporate programmes and panel listings.'],
            ['slug' => 'mustardshirt', 'label' => 'Warm mustard', 'use' => 'Community sessions and teaching contexts.'],
            ['slug' => 'brocadecladpresenter', 'label' => 'On stage', 'use' => 'Speaking pages and event promotions.'],
        ],
    ],

    'proof' => 'Lately I have spoken for MATRADE, two ministries and nine universities.',

    'contact' => [
        'email' => 'saiffilfariz@gmail.com',
        'city' => 'Shah Alam, Malaysia',
        'invitation' => 'Whether you need a talk, a stronger team, working software or a creative collaboration, tell me what you have in mind. I read every message myself.',
    ],

    /*
    | These five topics organize writing, talks and programmes.
    */
    'pillars' => [
        [
            'slug' => 'code',
            'name' => 'Code',
            'line' => 'Building software that solves real problems.',
            'blurb' => 'Websites, applications, systems and integrations shaped around real work. Lessons from building them, keeping them running and helping people use them.',
            'image' => 'pillar-code',
        ],
        [
            'slug' => 'commerce',
            'name' => 'Commerce',
            'line' => 'Running and growing a small business.',
            'blurb' => 'Lessons from building businesses in Malaysia. Pricing, customers, and the unglamorous work that keeps a small company alive.',
            'image' => 'pillar-commerce',
        ],
        [
            'slug' => 'influence',
            'name' => 'Influence',
            'line' => 'Talks and teaching that people can use.',
            'blurb' => 'Notes from keynotes and workshops. How to explain AI and technology so a busy room leaves with a next step.',
            'image' => 'pillar-influence',
        ],
        [
            'slug' => 'education',
            'name' => 'Education',
            'line' => 'Teaching technology in plain language.',
            'blurb' => 'How I teach AI to people who do not think of themselves as technical. Methods, mistakes and what actually sticks.',
            'image' => 'pillar-education',
        ],
        [
            'slug' => 'character',
            'name' => 'Character',
            'line' => 'Doing good work, honestly.',
            'blurb' => 'The human side of the work. Focus, family, patience, and why the point of saving time is what you do with it.',
            'image' => 'pillar-character',
        ],
    ],

    /*
    | Formats and audiences are the other writing filters.
    */
    'formats' => ['Essay', 'Talk', 'Workshop', 'Field note'],
    'audiences' => ['Individual', 'Team', 'Leader', 'Organisation'],

    'programmes' => [
        [
            'slug' => 'ai-awakening',
            'name' => 'AI Awakening',
            'kicker' => 'Masterclass',
            'summary' => 'A two-day class for people who want to use AI in their own job. You will build one working workflow on your own task and learn how to check the results.',
            'format' => '2 days',
            'location' => 'Kuala Lumpur',
            'dates' => '4–5 June 2026',
            'seats' => '12 seats left',
            'price' => 'RM 1,850',
            'price_note' => 'per person',
            'image' => 'editorial-capability-v1',
            'featured' => true,
        ],
        [
            'slug' => 'brand-makeover',
            'name' => 'AI Brand Makeover 101',
            'kicker' => 'One day',
            'summary' => 'A one-day class for a small team. Bring your brand material and leave with a clear voice, visuals and templates you can reuse.',
            'format' => '1 day',
            'location' => 'Kuala Lumpur',
            'dates' => '16 June 2026',
            'seats' => 'Open',
            'price' => 'RM 980',
            'price_note' => 'per person',
            'image' => 'editorial-brand-studio-v1',
            'featured' => false,
        ],
        [
            'slug' => 'teams-and-leaders',
            'name' => 'For teams and leaders',
            'kicker' => 'In-house',
            'summary' => "Training built around your team's actual work. We run it at your place or ours, and we use your documents and processes, not samples.",
            'format' => 'By arrangement',
            'location' => 'Your office or ours',
            'dates' => 'By arrangement',
            'seats' => 'Enquire',
            'price' => 'From RM 12,000',
            'price_note' => 'per cohort',
            'image' => 'program-teams',
            'featured' => false,
        ],
    ],

];
