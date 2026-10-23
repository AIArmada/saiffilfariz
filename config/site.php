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

    'facts' => [
        ['value' => '30', 'label' => 'years with technology', 'note' => 'since 1996'],
        ['value' => '100+', 'label' => 'talks and workshops', 'note' => 'Malaysia and the region'],
        ['value' => '300+', 'label' => 'organisations', 'note' => 'public, private, academic'],
        ['value' => '9', 'label' => 'universities', 'note' => 'guest lectures and programmes'],
    ],

    'proof' => 'Lately I have spoken for MATRADE, two ministries and nine universities.',

    'contact' => [
        'email' => 'hello@saiffilfariz.com',
        'city' => 'Shah Alam, Malaysia',
    ],

    /*
    | These five topics organize writing, talks and programmes.
    */
    'pillars' => [
        [
            'slug' => 'code',
            'name' => 'Code',
            'line' => 'Building software that solves real problems.',
            'blurb' => 'Thirty years of building software and keeping it running. What works, what breaks, and what I would do differently.',
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
