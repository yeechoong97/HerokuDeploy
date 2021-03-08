<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forums')->insert([
            [
                'forum_id' => 'FOM1',
                'user_id' => 'EST1',
                'tag' =>  '1',
                'title' => 'What has been your biggest lesson as a Forex trader?',
                'contents' =>  '<p>Mine has been that when Forex Trading is approached as an investment, it gives better consistent profits. I refer to it as the power of compounding.</p>',
                'created_at' => Carbon::now()->subDay(5)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM2',
                'user_id' => 'EST2',
                'tag' =>  '1',
                'title' => 'How difficult forex trading is for you?',
                'contents' =>  '<p>Most forex traders seem to be short term, swing or intra-day traders looking to pick up a few pips and move on. What makes this difficult is that trying to accurately predict 30-40 pips over and over again on a consistent basis with a long term profit is something nearly impossible for most of them.</p>',
                'created_at' => Carbon::now()->subDay(10)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM3',
                'user_id' => 'EST3',
                'tag' =>  '1',
                'title' => 'What you thinks about Forex Trading?',
                'contents' =>  '<p>There is not a single forex trader who did not make mistakes during their trading career especially in the beginning of trading. Most of the beginners will fail to learn from their mistakes except a small percentage of traders who will make the mistakes and learn from them. This is what will separate successful traders from failures.</p>',
                'created_at' => Carbon::now()->subDay(8)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM4',
                'user_id' => 'EST1',
                'tag' =>  '1',
                'title' => '5 Tips for forex beginner',
                'contents' =>  "<ol><li>If you don’t have much capital, forex is the ideal form of investment.</li><li>If you have too little capital, you’d better not trade at all.</li><li>Love the market (one forex tip that says it all)</li><li>Very important forex tip: trading at high level requires a good knowledge of the market.Not even the best trader in the market gains all the time.</li><li>Forex market is extremely volatile. For this reason, timing is essential: knowing when to start, stop or pause is a crucial to gain money with forex.</li></ol>",
                'created_at' => Carbon::now()->subDay(15)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM5',
                'user_id' => 'EST4',
                'tag' =>  '1',
                'title' => 'What causes Spreads to change?',
                'contents' =>  '<p>Dear Friends,I m kind of confused to what would cause spreads to change second by second,My broker offers both the fixed and variable spreads but would trigger the variable spreads to change with time? I would appreciate any help</p>',
                'created_at' => Carbon::now()->subDay(14)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM6',
                'user_id' => 'EST6',
                'tag' =>  '1',
                'title' => 'How important are tied spreads to you?',
                'contents' =>  '<p>One of the most important factors which play an important role in determining the profitability of your forex trades are spreads. Nothing else affects the transaction costs of forex trading more than the spreads which are offered by your forex broker.</p>',
                'created_at' => Carbon::now()->subDay(11)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM7',
                'user_id' => 'EST2',
                'tag' =>  '1',
                'title' => 'Can i really learn forex with DEMO?',
                'contents' =>  '<p>Alot of people ask this question often if they can actually learn to trade the forex market with demo account.</p><p>Well the truth is, forex requires both skills/strategy, Psychology and money management. Out of these three essentials, DEMO account only make provision for one and that is SKILLS/STRATEGY</p><p>With the forex DEMO account you wont be able to completely perfect the other arms of forex which are even more important than strategies itself.</p><p>In summary Learning forex can be okay with a demo account but if you want to fully perfect the fullness of a trader and beome a pro at what you do.</p><p>Cheers and wish you best of luck as a beginner</p>',
                'created_at' => Carbon::now()->subDay(20)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM8',
                'user_id' => 'EST1',
                'tag' =>  '1',
                'title' => 'What is your main job?',
                'contents' =>  '<p>I take this job as part time. There are many people who are taking Forex as their primary job. How about you? Do you take Forex as your main job or not?</p>',
                'created_at' => Carbon::now()->subDay(22)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM9',
                'user_id' => 'EST6',
                'tag' =>  '1',
                'title' => 'Why you should not give up forex trading?',
                'contents' =>  '<p>The reason why many new traders want to quit trading is most likely due to huge losses along with promising rags to riches within the end of the week. However, more often than not this is the exact period where you learn some of the most important lessons as a forex trader.</p>',
                'created_at' => Carbon::now()->subDay(5)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM10',
                'user_id' => 'EST3',
                'tag' =>  '1',
                'title' => 'Why demo performance is often better than live performance?',
                'contents' =>  '<p>In the casual world of free demo accounts - many young traders find they are able to garner impressive profits without a significant amount of effort. It almost seems too good to be true. But transferring this success from a demo account to a real account is far less common. Why is this?</p>',
                'created_at' => Carbon::now()->subDay(26)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM11',
                'user_id' => 'EST6',
                'tag' =>  '1',
                'title' => 'Plan your goals and Stick to the plan!',
                'contents' =>  '<p>Once you know what you want from trading, you must systematically define a time frame and a working plan for your trading career. What constitutes failure, what would be defined as success? What is the time frame for the trial and error process that will inevitably be an important part of your learning? Do you aim at financial independence, or merely aim to generate extra income? These and similar questions must be answered before you can gain the clear vision necessary for a persistent and patient approach to trading. Also, having clear goals will make it easier to abandon the endeavor entirely in case that the risk/return analysis precludes a profitable outcome.</p>',
                'created_at' => Carbon::now()->subDay(24)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM12',
                'user_id' => 'EST1',
                'tag' =>  '1',
                'title' => 'The most risky market.',
                'contents' =>  '<p>While the forex market is obviously an incredible market to exchange, I would like to all fledglings that trading conveys both the potential for reward and risk. Numerous individuals come into the markets pondering the reward and overlooking the risks included, this is the quickest method to lose the majority of your trading account cash.</p>',
                'created_at' => Carbon::now()->subDay(12)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM13',
                'user_id' => 'EST3',
                'tag' =>  '1',
                'title' => 'How to get rich with Forex?',
                'contents' =>  '<p>How can we get rich with Forex?</p><p>Do you think we can be rich by just trading with Forex?</p><p>What do you think is the best way to become wealthy?</p><p>Do you have some methods and strategies most suitable to become a professional and profitable trader?</p>',
                'created_at' => Carbon::now()->subDay(17)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM14',
                'user_id' => 'EST1',
                'tag' =>  '1',
                'title' => 'How to Trade Safely?',
                'contents' =>  '<p>In general experts recommend that small investors devote no more than a few percentage points of their overall portfolio to forex trading in order to limit any possible damage. What’s your way of safe trading?</p>',
                'created_at' => Carbon::now()->subDay(21)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM15',
                'user_id' => 'EST2',
                'tag' =>  '1',
                'title' => 'What is the best way to learn about forex trading?',
                'contents' =>  "<p>I would like to learn to trade forex but don't want to sign up to any scams that say they deliver but don't and just take your money,is there any real genuine help out there.</p>",
                'created_at' => Carbon::now()->subDay(14)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM16',
                'user_id' => 'EST1',
                'tag' =>  '5',
                'title' => 'how to be a good trader?',
                'contents' =>  "<p>how time's need to be a good and professional trader?</p>",
                'created_at' => Carbon::now()->subDay(8)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM17',
                'user_id' => 'EST1',
                'tag' =>  '5',
                'title' => 'Thinking abilities.',
                'contents' =>  "<p>On the off chance that your mind translates it as a reminder, your critical thinking abilities are initiated. Ordinarily, you'd attempt to make sense of what occurred and what are the potential factors that caused the undesired impact. During the following choice, your consideration uplifts and you may set aside a more drawn out effort to finish up what you ought to do, a wonder is known as 'post-blunder easing back'.</p>",
                'created_at' => Carbon::now()->subDay(11)->format('Y-m-d H:i:s')
            ],
            [
                'forum_id' => 'FOM18',
                'user_id' => 'EST3',
                'tag' =>  '5',
                'title' => 'Have you ever experienced to borrow money for Forex trading?',
                'contents' =>  "<p>Do you think newbies borrow money for initial trading?</p><p>Is it only newbies or almost all traders who are addicted to it?</p><p>How about you? Have you experienced it too?</p>",
                'created_at' => Carbon::now()->subDay(24)->format('Y-m-d H:i:s')
            ]
            ]);
    }
}
