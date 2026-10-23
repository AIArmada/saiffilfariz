<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->posts() as $post) {
            Post::updateOrCreate(['slug' => $post['slug']], $post);
        }
    }

    private function posts(): array
    {
        return [
            [
                'slug' => 'how-to-start-with-ai',
                'title' => 'How to start with AI when you’re not a “tech person”',
                'dek' => 'Begin with a clearer question, not a better tool. Three small experiments you can run this week.',
                'pillar' => 'education',
                'format' => 'Essay',
                'audience' => 'Individual',
                'reading_time' => 6,
                'image' => 'purpose-mountain',
                'featured' => true,
                'published_at' => '2026-10-06 09:00:00',
                'body' => <<<'MD'
I have now sat in rooms with several thousand people who were told, in one way or another, that AI was not for them. Teachers. Clerks. Small business owners. The message they absorbed was always some version of: *this belongs to the technical people.*

It doesn't. What belongs to the technical people is the plumbing. What belongs to you is the judgement about what is worth doing.

So here is the least technical advice I can give.

## Start with a task, not a tool

Almost everyone starts by opening a chatbot and typing "what can you do?" That is the worst possible first move, because the answer is a list of capabilities with no relationship to your Tuesday.

Instead, take ten minutes and write down three things you did last week that felt repetitive, or slow, or like something you should have been able to hand off. Not ambitious things. The email you rewrote four times. The meeting notes nobody reads. The report you rebuild from the same spreadsheet every month.

Pick the smallest one.

## Run three small experiments

An experiment has a shape: a task, a try, and an honest verdict. Give each one twenty minutes.

1. **Rewrite something you already wrote.** Paste in a message you sent and ask for three versions: shorter, warmer, more direct. Keep the one you'd actually send.
2. **Summarise something you already read.** Give it a document you know well and ask what it thinks the argument is. You are testing whether it understood, and you already know the answer.
3. **Draft something you keep postponing.** The awkward email. The first paragraph of the proposal. You are not looking for a finished thing; you are looking for a starting point that is better than a blank page.

Then write down what happened. Not "it was impressive" — what specifically was useful, and what was wrong.

## The only real skill

After a few of these you notice the pattern: the people who get good at this are not the ones with the best tools. They are the ones who can describe what they want precisely, and who can tell when the answer is confidently wrong.

That is a writing skill and a judgement skill. You already have both. You have been using them on people your whole career.

## What to ignore for now

Ignore agents, workflows, fine-tuning, and anything with a waitlist. Ignore the person on LinkedIn who says everything has changed forever. Ignore the urge to buy a course before you have run three experiments of your own.

The gap between the people who benefit from this and the people who don't is not technical. It is about ninety minutes of deliberate practice and a willingness to be unimpressed.
MD,
            ],

            [
                'slug' => 'what-a-workshop-changes',
                'title' => 'What a forty-person workshop actually changes',
                'dek' => 'Notes from a Tuesday in Shah Alam: what stuck, what didn’t, and the one slide I would cut.',
                'pillar' => 'education',
                'format' => 'Field note',
                'audience' => 'Team',
                'reading_time' => 4,
                'image' => 'work-training-room',
                'featured' => false,
                'published_at' => '2026-09-22 09:00:00',
                'body' => <<<'MD'
Forty people, one room, six hours, a projector that worked on the second try. Here is the honest record.

## What stuck

**The two-hour build.** We spent the whole afternoon on one task: take a real report this team produces every month and rebuild it, badly and quickly, with AI doing the first draft. Everyone left with a thing that half-worked. That half-working thing is worth more than any slide I showed, because they now know where it breaks.

**The failure demo.** I deliberately ran a prompt that produced a confident, plausible, wrong answer — a citation that didn't exist. The room went quiet in a way that no amount of "always verify" ever achieves. Three people told me afterwards it was the most useful five minutes.

**The pairs.** Two people per laptop, one driving, one reading the output critically. Solo work produced faster output and worse judgement.

## What didn't

**The taxonomy slide.** The one that maps model types to use cases. It looked impressive and it taught nobody anything, because the distinction it draws does not change a single decision any of them will make on Monday.

**The open Q&A at the end.** By four o'clock the room wanted to leave. The questions were good; the timing was wrong. I would move it to right after lunch, when energy is high and the build hasn't tired everyone out.

**"Any questions so far?"** — asked twice, answered with silence both times. People don't ask questions in a group. They ask them at the coffee station, which is where the real curriculum gets negotiated.

## The number that mattered

Two weeks later, four of the forty had changed something in how they work. Four out of forty sounds like a failure. It isn't — the baseline for a day of training is usually zero. But if I had designed the day around getting that number to eight, I would have cut the taxonomy slide, moved the Q&A, and spent the last hour on the second build instead of the summary.

Next time.
MD,
            ],

            [
                'slug' => 'build-the-boring-thing-first',
                'title' => 'Build the boring thing first',
                'dek' => 'Every AI project that failed in front of me failed because someone skipped the spreadsheet.',
                'pillar' => 'code',
                'format' => 'Essay',
                'audience' => 'Team',
                'reading_time' => 7,
                'image' => 'pillar-code',
                'featured' => false,
                'published_at' => '2026-09-09 09:00:00',
                'body' => <<<'MD'
I have watched more than a dozen organisations try to put AI into a process. The failures have almost nothing in common with each other except one thing: they started at the interesting end.

## The pattern

Someone identifies a workflow that is expensive and manual. They are right about that. Then they go looking for a model, a vendor, a pilot. They build a demo. The demo is impressive. The demo works on the three examples they chose.

Then it meets production, and the first question is: *where does the input come from?*

And nobody knows, because the input lives in four inboxes, a WhatsApp group and a spreadsheet that one person maintains and everyone pretends not to depend on.

## What the boring version looks like

The boring version starts by making the input exist in one place, in one shape, with one definition of each field. No model. No demo. It takes six weeks and nobody wants to fund it, because it looks like tidying.

Then the interesting version takes four days instead of four months, because the model has something coherent to read.

I have never seen this fail. I have seen it be skipped constantly.

## Why it gets skipped

Because tidying is invisible. A demo is a slide. A schema is a meeting where you argue about whether a customer is a person or an account.

The incentive is to show something. The boring thing shows nothing until it is finished, and then it shows everything.

## A test I use now

Before any AI project starts, I ask one question: *if we replaced the model with an intern, could the intern do this?*

If the answer is no — because the intern would not know where to look, or what the fields mean, or which of the three conflicting numbers is the real one — then the model cannot do it either. The problem is not intelligence. It is structure.

Fix the structure. Then the model is a multiplier instead of a very confident random number generator.

## The uncomfortable part

This advice is unpopular with people selling AI and with people who want to buy it, because it reframes the project as something less exciting: data hygiene, ownership, definitions, and the willingness to say "this number is wrong" out loud in a meeting.

But it is the difference between a pilot that ends in a case study and one that ends in quietly not being mentioned again.
MD,
            ],

            [
                'slug' => 'ai-for-malaysian-smes',
                'title' => 'Opportunities in AI for Malaysian SMEs',
                'dek' => 'Why now is the moment for the 900,000 businesses that will never hire a data team.',
                'pillar' => 'commerce',
                'format' => 'Talk',
                'audience' => 'Leader',
                'reading_time' => 8,
                'image' => 'pillar-commerce',
                'featured' => false,
                'published_at' => '2026-08-18 09:00:00',
                'body' => <<<'MD'
*This is the written version of a talk I give to chambers of commerce and SME associations. The argument, in short: the businesses that will benefit most from AI are the ones that will never hire a data scientist, and the reason is arithmetic.*

## The arithmetic

A large company can afford a team of twelve to save three per cent. A company of nine people cannot afford a team of one — but it can save thirty per cent, because the same person is doing sales, invoicing, support and the newsletter.

That is the whole opportunity. It is not about capability. It is about where a marginal hour goes.

## Three places it shows up

**Quotations and proposals.** Most SMEs rebuild the same document with different numbers, forty times a month. This is the highest-return, lowest-risk place to start, because you already know what a good one looks like and you can check the output in ten seconds.

**Customer replies.** The same eleven questions, answered by hand, by the owner, at 11pm. Drafting replies is not glamorous and it gives back evenings.

**The thing nobody writes down.** Every SME has a process that lives in one person's head. AI is very good at turning a rambling explanation into a checklist — and the act of explaining it is where the value is, not the document.

## What I would not do

Do not buy a platform before you have a task. Do not start with the thing that touches money or customers. Do not let a vendor define success in a way you cannot verify.

And do not assume your staff will resist. In my experience the resistance is almost always from the middle, where someone's status depends on being the person who knows.

## The uncomfortable bit

The businesses that move first will not have better technology. They will have clearer processes, because you cannot automate a process you cannot describe. AI is, among other things, a very expensive way of discovering that your operations were held together by memory and goodwill.

That discovery is worth more than the automation.
MD,
            ],

            [
                'slug' => 'a-simple-system-for-a-focused-life',
                'title' => 'A simple system for a focused life',
                'dek' => 'The tools, habits and small refusals that keep the work honest when everything is urgent.',
                'pillar' => 'character',
                'format' => 'Essay',
                'audience' => 'Individual',
                'reading_time' => 5,
                'image' => 'story-reflective-closing',
                'featured' => false,
                'published_at' => '2026-07-30 09:00:00',
                'body' => <<<'MD'
People ask about my system as if it were a set of apps. It isn't. It's four refusals and one habit, and the apps are interchangeable.

## The refusals

**I don't start the day with a screen.** Not because screens are bad, but because the first thing I read sets the temperature of the day, and I would rather choose it.

**I don't accept a meeting without an outcome.** "Catch up" is not an outcome. If I can't say what will be different afterwards, I ask for it in writing instead — which usually resolves it.

**I don't do two kinds of work in the same hour.** Teaching, building and writing use different parts of my head. Switching costs more than the switch saves.

**I don't finish the day with the hardest thing undone.** The hardest thing gets the first ninety minutes, before anyone else is awake and before the inbox has opinions.

## The habit

Every Friday, twenty minutes, one question: *what did I do this week that I would not do again?*

That's it. Not a review of goals. Not a productivity ritual. One question, answered honestly, written down.

The answers accumulate into something more useful than any plan: a list of things I have already decided not to repeat. Most of my improvement has come from that list rather than from anything I added.

## Why this is hard

Because it looks like you're doing less. Because the urgent thing is always more legible than the important thing. Because saying "no outcome, no meeting" makes you slightly less easy to work with, and being easy to work with is a genuine good that competes with the other goods.

I have not solved that. I just notice it now, which is most of the battle.

## What I'd tell someone starting

Don't design a system. Subtract one thing this week and see what fills the space. If nothing fills it, subtract another. The system is what's left when you stop adding.
MD,
            ],

            [
                'slug' => 'the-human-side-of-digital-transformation',
                'title' => 'The human side of digital transformation',
                'dek' => 'What changes when people are brought into the room early — and what doesn’t.',
                'pillar' => 'influence',
                'format' => 'Talk',
                'audience' => 'Leader',
                'reading_time' => 6,
                'image' => 'work-audience-closeup',
                'featured' => false,
                'published_at' => '2026-06-11 09:00:00',
                'body' => <<<'MD'
The most common sentence in a transformation programme is "we need to bring people along". It is said by people who have already decided where everyone is going.

## Two kinds of resistance

There is resistance to the change, and there is resistance to being changed. They look identical in a meeting and they need completely different responses.

Resistance to the change is usually information. Someone knows something about the process you don't. If you listen, you get a better design.

Resistance to being changed is about status and competence. Someone has spent eleven years being the person who knows how the system works, and you are proposing to make that knowledge optional. No amount of communication fixes this, because it is not a communication problem. It is a loss.

## What actually helps

**Name the loss out loud.** "This will make part of your job disappear, and I don't have a good answer for what replaces it yet." People can work with honesty. They cannot work with being told they are excited.

**Give the sceptic a real job.** Not a token seat on a steering committee. The job of finding the failure mode. Sceptics are the best testers you will ever get, and testing is the one role where pessimism is an asset.

**Change something visible in week two.** Momentum is not built by a roadmap. It is built by one person saying "that used to take me a day" in a corridor.

## What doesn't help

Town halls. Newsletters with a stock photo of a handshake. The word "journey". Any sentence containing "embrace".

## The thing I keep relearning

People are not resistant to technology. They are resistant to being made to feel stupid, and technology is an unusually efficient way of making people feel stupid in public.

Design for that, and most of the rest takes care of itself.
MD,
            ],

            [
                'slug' => 'make-complex-ideas-easier-to-use',
                'title' => 'Make complex ideas easier to use',
                'dek' => 'A practical approach to teaching what matters — and to cutting what doesn’t.',
                'pillar' => 'education',
                'format' => 'Essay',
                'audience' => 'Team',
                'reading_time' => 5,
                'image' => 'pillar-education',
                'featured' => false,
                'published_at' => '2026-05-14 09:00:00',
                'body' => <<<'MD'
Every workshop I teach gets shorter. Not because there is less to say, but because I keep finding things that were never load-bearing.

## The test

For anything I plan to teach, I ask: *what would someone do differently tomorrow if they only knew this?*

If the answer is "nothing, but they'd understand it better", it gets cut. Understanding that changes nothing is a hobby, not a curriculum.

## Three moves that work

**Start with the wrong version.** Show the naive approach, let people feel why it fails, then introduce the correct one. The correct one lands twice as hard because it is now the answer to a question they have actually asked.

**One idea per artefact.** If a slide has two ideas, it has zero. Split it, or delete one.

**Make them produce something.** Even a bad thing. Especially a bad thing — a bad thing they made teaches more than a good thing they watched.

## The thing teachers get wrong

We teach in the order we learned. That order is almost never the order someone needs. We learned the theory first because we had a reason to; they don't yet.

So teach the outcome first, the shortcut second, and the theory third — and only to the people who ask. Some will. Those are the ones who go on to teach it themselves, and that is the actual goal.

## A note on jargon

Jargon is not a sign of expertise. It is a sign of a community, and using it in a room that isn't in the community is a way of saying "this isn't for you" without meaning to.

I keep a list of words I'm not allowed to say in a beginner room. It gets longer every year. So far, nothing on it has been missed.
MD,
            ],

            [
                'slug' => 'more-time-for-what-truly-matters',
                'title' => 'More time for what truly matters',
                'dek' => 'Technology should return something valuable: attention. A note on what I want it to buy.',
                'pillar' => 'character',
                'format' => 'Essay',
                'audience' => 'Individual',
                'reading_time' => 4,
                'image' => 'home-beach',
                'featured' => false,
                'published_at' => '2026-04-20 09:00:00',
                'body' => <<<'MD'
My sons are eight and five. In the time it takes to read this, one of them will have asked me a question I will not remember answering.

That is the actual unit of measurement for everything I do with technology now.

## The wrong question

"Will this make me more productive?" is the wrong question, because the answer is always yes and the follow-up is always *toward what?*

The right question is: what will I do with the hour this gives back? If the answer is "more work", then I have not saved an hour, I have borrowed one at a terrible interest rate.

## What I want it to buy

Not more output. Three things:

**The walk.** The one where nobody talks and you notice the weather. It sounds trivial written down. It is the thing I miss most in a busy month.

**The boring conversation.** The one with no agenda, where a child tells you about a snail for eleven minutes. There is no shortcut for this and no way to do it efficiently.

**The long think.** Ninety minutes on one problem without interruption. Almost all of my good ideas come from this block and almost none of them come from the other fourteen hours.

## The honest accounting

Most weeks I fail at this. The tools give me back four hours and I spend them on email, because email is legible and a walk is not.

So I have started scheduling the walk first and letting the email find its own level. It is a small trick and it works more often than it should.

## What I'd want on my headstone

Not "he was very productive".

Something closer to: he noticed. He was there for the snail.
MD,
            ],

            [
                'slug' => 'why-the-masterclass-starts-with-questions',
                'title' => 'Why the masterclass starts with questions',
                'dek' => 'The first ninety minutes of AI Awakening have no slides. Here is what happens instead, and why.',
                'pillar' => 'influence',
                'format' => 'Workshop',
                'audience' => 'Organisation',
                'reading_time' => 3,
                'image' => 'program-awakening',
                'featured' => false,
                'published_at' => '2026-03-02 09:00:00',
                'body' => <<<'MD'
Most AI training opens with a definition. We open with a blank wall and a marker.

## The wall

Everyone writes down one task they did last week that felt like a waste of their life. Not a task they think AI could do — a task they resent. The wall fills up in about twelve minutes.

Then we sort. Which of these are repetitive? Which require judgement? Which require a relationship? Which require a signature?

By the end of ninety minutes the room has produced its own curriculum, and it is always better than mine, because it is about their actual Tuesdays.

## Why this matters

Because a definition of AI is forgettable and a list of your own resentments is not. The rest of the two days refers back to that wall constantly — "remember the invoice one" is a much better teaching tool than any framework.

It also does something subtler: it makes the room responsible for the content. People defend what they wrote. They argue about whether a task needs judgement. That argument is the learning.

## The cost

It is slower. A definition takes four minutes; the wall takes ninety. If you are buying a lecture, this will annoy you.

And it requires a facilitator who can let silence sit, which is harder than it sounds when forty people are looking at you.

## What comes after

Only once the wall exists do we touch a tool. By then the first thing anyone builds is a task they already hate, which means they have a reason to care whether it works — and a way to tell whether it did.

That is the whole design. Everything else is logistics.
MD,
            ],
        ];
    }
}
