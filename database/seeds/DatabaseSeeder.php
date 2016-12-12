<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create admin
        $admin = new User;
        $admin->name = config('owner.name');
        $admin->email = config('owner.email');
        $admin->password = Hash::make('temporary');
        $admin->save();




        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'Waves are brutal';
        $post->body = 'When I started playing professional online poker in 2007, I doubled the money in my online account every month - soon making tens of thousands of dollars each month. If I tried to do the same today, I would be lucky to break even.<BR>
<BR>
<blockquote>You grow and die with the wave.<BR>
Go where the growth is. </blockquote>
Let\'s have a look at the consequences of working in a growing versus a shrinking environment:<BR>
<ul>
	<li><strong>If your market grows</strong>, opportunities arise. If your market shrinks, companies die.</li>
	<li><strong>If your industry grows</strong>, companies focus on getting customers. If your industry shrinks, companies focus on survival and cost cutting.</li>
	<li><strong>If your company grows</strong>, you grow your team. If your company shrinks, you lose your job.</li>
</ul>
Meet the wave early. The earlier you are in, the more assets (skills, network) you have once the market is big. You will face big demand by a big market with experience few others have acquired. A rare asset in big demand - that\'s where you want to be.<BR>
<BR>
Imagine the opposite - You jump the wave late. Many people came before and have more assets. You are competing in a market with shrinking demand. You have no chance and die.<BR>
<BR>
Get on the train as early as your risk tolerance allows. The earlier you jump, the stronger you will ride the wave. Estimate how long the party will last. The bigger the future market, the later you can afford to jump.<BR>
<BR>
If you find a wave in an early stage and you think it will get big: <strong> be bold and make the commitments</strong>. You are lucky to have found the wave. Seize the opportunity as much as you can.<BR>
<ul>
	<li>As employee, join the leading company in the field. Learn the skills and network. Work as hard as you ever can.</li>
	<li>As investor, chase the leading company and beg them to take all your money.</li>
</ul>
Once you have ridden a wave from the early stage, you will never want to do anything else. I promise.';
        $post->created_at = '2015-03-06 01:49:00';
        $post->image_url = '/posts/1.png';
        $post->author_id = 1;
        $post->save();



        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'Find, Sell, Make';
        $post->body = 'Before starting my business TheTrustCall.com I read hundreds of books and blogs about Entrepreneurship. Most of that time was wasted. All you need to know is in this article.<BR>
<BR>
Starting a business is no rocket science:<BR>
<BR>
1) Find an urgent need in a currently small but potentially big market<BR>
2) Sell the product<BR>
3) Make the product<BR>
<BR><blockquote>Research and list at least 100 ideas</blockquote>
First, research about new upcoming businesses - preferably outside of the location where you plan building your business. Read foreign blogs, travel to hot spots of your industry, read venture capital reports. Make a list of at least 100 ideas that will succeed and that you would enjoy working on. Pick the one idea you cannot stop thinking about.<BR>
<BR><blockquote>When you have THE ONE idea: Sell!</blockquote>
Find customers for your idea. Minimize risk where possible. Do not invest time and money in building a product - just make a mock up or a PowerPoint if you really need. You only want to build if people want it. In the beginning - just SELL, SELL, SELL!<BR>
<BR>
<strong>Most new businesses fail because they built something people don\'t want.</strong><BR>
<BR>
With 90% of your ideas, you will fail to sell. That is why you don\'t build beforehand. Repeat the above process until you found demand.<BR>
<BR><blockquote>When you found people who want to give you money: Build crappy version 0.1</blockquote>
If you sold a product that you can build by yourself - do it. If you do not have the skills: talk to a friend you know for at least 5 years who can be your technical co-founder. Give him 50% equity. Every imbalance will cost you rather than bring you gain. If you did a lot of sales and have customers, everyone wants to be your technical co-founder. Choose wisely. Choose your friend.<BR>
<BR><blockquote>Get regular customer feedback and iterate over time.</blockquote>
Build in iterations and get customer feedback every other day. Shape your product in a way your customers want it. Do it quickly. Your customers will love and advocate for you.<BR>
<BR>
<strong>Rinse and repeat: sell and build.</strong><BR>
<BR>
Once you get too many customers and have good cash flow: hire people to help you selling. Once you are exploding in demand, think about getting a small investment from a strategic investor. One day, that investor should buy you entirely or at least forward you to somebody who will.<BR>
<BR>
That\'s it. No rocket science. Now do it!';
        $post->created_at = '2015-03-07 11:11:00';
        $post->image_url = null;
        $post->author_id = 1;
        $post->save();


        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'How to get a Ferrari and be loved by everyone';
        $post->body = 'Ask yourself this difficult question.
<BR><blockquote>What important truth do very few people agree with you on? - Peter Thiel</blockquote>
Here is my answer:<BR>
<BR>
<strong>Most people think financial success is about capturing value for yourself.</strong> You only create value as a legitimization to charge money:<BR>
Set the price as high as possible, reduce cost as much as you can. Add hidden fees for cancellation. Negotiate maximum salaries for yourself and minimum salaries for your employees. If you take a job - work as little as possible.<BR>
In short: With minimum effort - squeeze every penny out of everyone. Maximize your monetary gain. Maximum monetary gain = maximum financial success.<BR>
<BR>
I disagree with the above. It does not work that way. Here is why:<BR>
<BR>
<strong>The truth is - lasting success is about maximizing value creation - not value capturing. </strong>Improve many people\'s lives as much as you can. Only charge as much as you need to help even more people.<BR>
Do not worry about capturing value for yourself. People notice when you improve their lives. People will give back to you. Instead of buying ads, you buy word of mouth by charging low. Especially in small businesses - the money you DO NOT charge will compound faster than any stock investment will. You will have made an invisible investment in your network, your reputation, your support group.<BR>
<BR>
The above works for any interaction with people. Do not focus on what you will receive. Always focus how you can improve other people\'s lives as much as possible. You will sleep better and live longer.<BR>
<BR>
Everyone will like you. Because they feel it is good to be around you.<BR>
<BR>
That is actually why you want that Ferrari in the first place. You just want to be liked.';
        $post->created_at = '2015-03-07 13:06:00';
        $post->image_url = '/posts/3.jpg';
        $post->author_id = 1;
        $post->save();


        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'The ROI  of exercise';
        $post->body = 'Six months ago I made a decision: Exercise regularly!<BR>
<BR>
<strong>The return on investment of exercise is 200% to 700%!</strong><BR>
<BR>
Here is how to get to that number:<BR>
<BR>
Think of your exercise time as an investment that returns health. The return is...<BR>
<ul>
	<li>Higher life expectancy</li>
	<li>Improved immune system (less colds)</li>
	<li>Improved brain function (better concentration)</li>
	<li>Weight control</li>
</ul>
<a title="ROI WIkipedia" href="http://en.wikipedia.org/wiki/Return_on_investment" target="_blank">The return on a capital investments is calculated by comparing the dollars invested with the dollars returned.</a><BR>
<BR>
Exercise is an investment made in time, not in dollars. Let us neglect all benefits but the gain in time (= life expectancy).<BR>
<BR>
According to an extensive Harvard research, life expectancy increases by 3 to 8 minutes for every minute of exercise. The lower your BMI, the higher the ROI. The older you are, the higher the ROI. Optimal are 30 minutes of heavy exercise per day.<BR>
<BR>
<strong>Start exercising today and make it a habit!</strong><BR>
<BR>
Source:<BR>
<ul>
	<li><a href="http://journals.plos.org/plosmedicine/article?id=10.1371/journal.pmed.1001335" target="_blank">http://journals.plos.org/plosmedicine/article?id=10.1371/journal.pmed.1001335</a></li>
</ul>
Articles:<BR>
<ul>
	<li><a href="http://news.harvard.edu/gazette/story/2012/11/how-much-exercise-is-enough/" target="_blank">http://news.harvard.edu/gazette/story/2012/11/how-much-exercise-is-enough/</a></li>
	<li><a href="http://www.cancer.gov/newscenter/newsfromnci/2012/PhysicalActivityLifeExpectancy" target="_blank">http://www.cancer.gov/newscenter/newsfromnci/2012/PhysicalActivityLifeExpectancy</a></li>
	<li><a href="http://commonhealth.wbur.org/2013/03/minutes-exercise-longer-life" target="_blank">http://commonhealth.wbur.org/2013/03/minutes-exercise-longer-life</a></li>
</ul>';
        $post->created_at = '2015-03-07 13:27:00';
        $post->image_url = '/posts/4.jpg';
        $post->author_id = 1;
        $post->save();



        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'How to become the top 0.001% of your discipline';
        $post->body = '<p>For 3 consecutive years, I was among the highest raking online poker professionals in the world. Out of 20,000,000 players on PokerStars, less than 200 "<a href="https://www.pokerstars.com/vip/supernova/elite/" target=_blank>SuperNova Elite VIPs</a>" have pushed similar amounts of money over the tables. All I needed was an initial deposit of USD 50.<BR>
Here is how you become the top 0.001% in your field.</strong>
</p>
<blockquote>You only become great at something, if you <strong>have a very concrete "WHY"</strong>. Why do you HAVE TO to become great at this? </blockquote>

You need perseverance. You need a very very strong reason not to give up when everything else tells you that you should. You must be the one who never quits. Nobody becomes great at something for the sake of being great. Every great success has a much deeper rooted reason. This reason should mean EVERYTHING to you. You need to be willing to give up everything else for that single reason. You must be the one who wants it most.<BR>
<em>My reason for poker: I was 22. By accident, I got sent to work in Hong Kong during an internship. I had never been out of old Europe before. I literally fell in love with the city. Everything was just too awesome. I spent lots of money. It was the best time of my life. On the return flight to little to Germany, I promised myself to go back - and never leave Hong Kong again. I needed a truck load of money for my plan. With poker, I found my way. I was willing to give up anything else to make this dream come true.</em><BR>
<BR>
<blockquote>You only become great at something, if you are in the <strong>right environment</strong>.</blockquote>
You are the average of the 5 people you pass most time with. Meet people who are already successful. Read the things they read. Go to forums where they are. Get influenced by their thoughts. Get a role model. Get another role model.<BR>
<em>I found my environment online. Other professional players posted their winnings in online forums and described their way to success. I learned from them. I read their articles. I knew I could be one of them if I worked just as hard as them.</em><BR>
<BR>
<blockquote>You need to find the <strong>right balances</strong>.</blockquote>
<ul>
	<li>Find the right balance of theory and practice. To improve efficiently, do both every day.</li>
	<li>Find the right balance for your body. Go to bed at the same time every day. Exercise every day. </li>
	<li>Find the balance for your brain - in what frequency do you need breaks? (I need a break every 2.5 hours)</li>
	<li>Find the right balance for your spiritual mind - how much social interaction do you need?</li>
</ul>
Listen carefully to your mind and body and incorporate the needs in your routines. Optimize for mastery in your field - but do not neglect your inner balance. Give this concept the attention it deserves. Otherwise you give up because of an imbalance. You quit before becoming great. You must be the one who never quits.<BR>
<em>Every day I was practicing poker for 10 hours. I was reading the theory during lunch, while exercising (podcasts) and in the evenings while relaxing on the sofa - a total of 3 hours per day. I did this every Monday to Saturday. Saturday night I went out and met friends. Sunday I recharged for the next week.</em>';
        $post->created_at = '2015-03-08 14:02:00';
        $post->image_url = '/posts/5.jpg';
        $post->author_id = 1;
        $post->save();



        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'Comparisons';
        $post->body = 'I live in Hong Kong - where most people drive BMW, Benz or Lamborghini. I live in Facebook - where most people have a happier life. I live in 2015 - when saving all of a median income can buy a median property after 40 years (our parents\' generation needed 20 years).<BR>
<BR>
I am born in 1986. Our generation is confused. We have peace, health, food, education, access to information - and yet something is wrong.<BR>
<BR>
We compare more. Through history, urbanisation and internet. We see ourselves as part of a much bigger group. And we are not the alpha animal in that huge group. So we feel weak. Too weak to marry. Too weak to have children. Too weak for a mortgage. Heck! Even too weak to buy a car.<BR>
<BR>
"I don\'t want to have children until I can afford to send them to a top school. Without that, they won\'t be able to compete."<BR>
<BR>
"I don\'t buy a property - I might need to live in a different country in 6 months. The return on investment is not attractive either."<BR>
<BR>
"I don\'t marry - everything in my life changes every few years. Its hard to imagine that relationships are any different".<BR>
<BR>
We don\'t commit. We keep options - to be ready for that BIG opportunity. That opportunity that changes everything - especially wealth. It is the opportunity that makes us the alpha member of our huge reference group. A multi-millionaire - at least.<BR>
<BR>
Without those millions we are weak - so we better are flexible, fit, fast. So we can always run away. Only the alpha fights. We are not alpha. We flee instead. Flee from commitments.<BR>
<BR>
Never settle. Especially for second best. Keep running. Stay hungry...<BR>
<BR>
That\'s our generation.';
        $post->created_at = '2015-03-16 01:06:00';
        $post->image_url = null;
        $post->author_id = 1;
        $post->save();



        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'Buying property';
        $post->body = '<p dir="ltr">Hong Kongers love to own property. Flat ownership is a common goal and regular small talk.</p>
<p dir="ltr"><em>"How much did you pay for that flat?" </em></p>
<p dir="ltr"><em>"Do you think the right time to buy is now?" </em></p>
<p dir="ltr"><em>"How does the mortgage cost compare to your previous rent?"</em></p>
<p dir="ltr">This is very different to Germany. Nobody talks properties there. I was wondering what was going on in Hong Kong.</p>
<p dir="ltr">HK property has been a lucrative investment for the last 100 years. The city has been growing rapidly - in line with its property prices. For the last 50 years or so, property prices rose twice as quickly as salary incomes. <BR>
<BR>
The consequences:</p>
<ul>
	<li dir="ltr">Older generations got rich through property - and teach their children to mortage.</li>
	<li dir="ltr">Property agencies made lots of money. They do lots of ads. In HK, finding a property agency is easier than finding a super market. TV shows and news discuss current price levels regularly.</li>
	<li dir="ltr">Property became the symbol of the haves versus the have-nots. No parent would advice their child to be with a have-not.</li>
</ul>
<blockquote>
<p dir="ltr">For Hong Kong locals it is a no-brainer to get a mortgage. Everybody considers flat ownership a central goal in life.</p>
</blockquote>
<p dir="ltr">Expats in Hong Kong have diverse opinions. I have a less emotional relationship to the mortgage idea.</p>
<BR><p dir="ltr"><strong>The cons of a mortgage</strong></p>

<ul>
	<li dir="ltr">With a mortgage, you put all your financial wealth into one asset. An average flat costs around HKD 4,000,000 (~ EUR 400,000). Nobody has similar wealth invested in other assets at the same time (stocks, bonds, own business). You will 100% rise and fall with your property price.</li>
	<li dir="ltr">If interest rates rose, Hong Kongers would not be able to afford the increasing monthly payments. Future rent cash flows get more discounted. Property prices would fall A LOT.</li>
	<li dir="ltr">For stagnating cities, the return of property is poor. A diversified stock / bond portfolio will provide much better results than a 100% owned property.</li>
	<li dir="ltr">A property takes away options. Transaction costs are high, personal mobility suffers. To meet the payments, you go with security rather than potential in your career choices.</li>
</ul>
<BR><p dir="ltr"><strong>The pros of a mortgage</strong></p>

<ul>
	<li dir="ltr">Putting all your eggs into one basket is aweful when it goes wrong but awesome when it goes right. If you buy the right thing in a depressed environment - there are few other ways to get that heavy exposure to market volatility. A 10% down payment mortgage gives you huge oportunity through leverage - amplifying whatever market movement comes your way.</li>
	<li dir="ltr">If you rent, you are bearish on your city\'s economy. You lose when the city blossoms. Your landlord will ask for more - since you and everybody else can afford more.<BR>If you own, you are  bullish on your city\'s economy. You gain when the city blossoms. Your property price will rise with the city. You want to work in rising economies (</span><a style="line-height: 1.5;" href="http://www.gerhard-kuschnik.com/blog/?p=107">see the article about waves</a><span style="line-height: 1.5;">).</span></li>
	<li dir="ltr">If interest rates rose, you would be in trouble. So would everybody else. So interest rates won\'t rise. They stay where they are. Forever. Like in Japan.</li>
	<li dir="ltr">The return on investment for a wholly owned property is low - however the return on a highly leveraged property mortgage is huge. As long as prices are low, it makes sense to own a little piece of a huge property rather than a big piece of a small property.</li>
	<li dir="ltr">With a property comes the social status. You are not the indepent, unreliable, free spirit but rather a fully integrated member of society with reputation and roots that can\'t be cut off easily.</li>
</ul>
<p dir="ltr"><strong>I hope I gave you a bit of inspirational input. Feedback is awesome. Leave your comment now! Thank you! </strong></p>';
        $post->created_at = '2015-03-17 11:05:00';
        $post->image_url = '/posts/7.jpg';
        $post->author_id = 1;
        $post->save();


        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'Evaluating business co-founders';
        $post->body = 'A successful startup only needs two things:<BR>
<BR>
1. Effective distribution<BR>
2. A great product that people adopt and stick with<BR>
<BR>
Distribution is what the business co-founder is for. He does the sales, partnerships, networking, online marketing, customer support. He also might write specs for the product because he knows what potential customers want.<BR>
<BR>
Product development is what the technical co-founder is for. He chooses technology, writes code, fixes bugs, implements an appealing design.<BR>
<BR>
A technical co-founder is expected to have a track record and know his stuff. He has done it before - can show his finished products and GitHub account. Nobody would work with a technical co-founder who has never touched code.<BR>
<BR>
The situation is very different for business co-founders. Most technical co-founders choose the wrong business partner. Many business co-founders see their role in "having the idea" and "raising the funds when needed". Technical co-founders don\'t understand what business people do - so they don\'t know what a good track record looks like. This is a huge problem. The number one reason for startup failure.<BR>
<BR>
<strong>Most startups fail because of a lack of customers, not because the product doesn\'t work.</strong><BR>
<BR>
Here is the dream business co-founder:<BR>
<BR>
1. He has customers before the product has been developed. He has the skills and network to create more demand down the road.<BR>
<ul>
	<li>If its a B2B startup, he has signed contracts with customers that would pay him to make the product. He had nothing but powerpoint mockups to sign those deals. Maybe he has had a job in sales before. He should have +500 linked in contacts.</li>
	<li>If its a B2C startup, he should be known by the target customer group. Maybe with a strong forum presence, a well followed twitter account or a popular podcast. He should have friends in relevant distribution channels (blogs, magazines, podcasts...) and in mass media (TV, radio, newspapers). He knows online marketing inside out and has an email list with thousands of interested prospects - waiting for the product to be developed.</li>
</ul>
2. He has raised funds or at least you really think he knows the right people to make it happen soon.<BR>
<BR>
3. He has an idea that you still like after several days of research.<BR>
<BR>
4. Last but not least: He has a great reputation of ethics. Great employees and partners have choice - and they only stick with people they feel comfortable with.<BR>
<BR>
<strong>Techies - choose your business partner wisely!</strong>';
        $post->created_at = '2015-03-25 00:42:00';
        $post->image_url = null;
        $post->author_id = 1;
        $post->save();


        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'Growth is not fluid';
        $post->body = '<blockquote>
<div>Let\'s <strong>throw away</strong> our application!</div>
<div>Let\'s <strong>re-develop everything</strong> all over again.</div>
<div><strong>In the trash</strong> with all this legacy code!</div>
<div>Let\'s change programming languages as well!</div></blockquote>
<div>
Successful startups do this! All the time!<BR>
Look at <a style="text-decoration: underline" href="https://blog.twitter.com/2011/twitter-search-now-3x-faster" target="_blank">Twitter</a>. Look at <a style="text-decoration: underline" href="https://engineering.groupon.com/2013/node-js/geekon-i-tier/" target="_blank">Groupon</a>.<BR>
<BR>
<strong>Same product, same UI. Totally new code base. </strong><BR>
<BR>
</div>
<div>Why do all this investment <strong>AGAIN</strong>?<BR>
For little design changes?<BR>
For better loading speeds?<BR>
All this pain - Seriously?<BR>
<BR>
<div><strong>TECHNOLOGY SCALABILIY</strong><BR>
In theory, great websites should scale.</div><BR>
<div>In theory, great business models should scale.</div><BR>
<div>But here is the catch: <strong>Growth is not fluid.</strong></div><BR>
<div>Growing is more like climbing walls.</div><BR>
<div>Businesses operate entirely differently with 10, 100 or 1000 people. Each order of magnitude requires reorganisation.</div><BR>
<div>Communication channels change. Roles change. Hierarchies change.</div><BR>
<div></div>
<div>Technical structures are no different. Even though both electric vehicles - a golf cart with max 25 km/h is built very differently from a Tesla Model S that runs an order of magnitude faster.</div><BR>
<div></div>
<div>The Youtube that serves billions of videos every month is technically a totally different beast to the quick hack that Steve Chen churned out.</div><BR>
<div><strong><BR>
SCALABILITY VS FLEXIBILITY AND SPEED</strong></div><BR>
<div>You choose:</div>
<ul><BR>
	<li>Do you want it fast? Do you need quick changes down the road?</li><BR>
	<li>Or do you need something scalable? Something that is able to serve millions?</li><BR>
</ul>
<div>You cannot have both. Scalable applications are not flexible. They need time to develop. Quick hacks however will crash with millions of daily users. Finding the balance between the two is important. I have seen both fails:</div><BR>
<ul>
	<li>Fail A: Products that have been launched quickly but crash once traffic increases. This typically happens when the team lacks senior developers who spot bottlenecks early. It happens for example if front- and backend are not properly separated. It happens when complex tasks are not put into queues. It happens when bad external APIs are used.</li>
	<li>Fail B: Products do not launch at all - or they launch very late and offer a huge bag of features that people do not use. This happens when startups lose focus. It happens when founders are scared of market feedback. It happens when programmers get bad, vague specs. The outcome is a huge and complicated application that cannot be modified quickly to market feedback.</li>
</ul>
Paul Graham gives a few rules of thumb in his <a style="text-decoration: underline" href="http://www.paulgraham.com/articles.html" target="_blank">essays</a> how to tackle the issue.<BR>
<ul>
	<li>Launch a crappy alpha 0.1 super quickly and test initial demand.</li>
	<li>Plan with feature shifts - your market likely does not want what you have built.</li>
	<li>Plan with technology failures - stay flexible in order to iterate.</li>
	<li>If the market likes it, develop for 10x growth.</li>
	<li>Do a complete redevelopment for every new order of magnitude. Don\'t redevelop with only double the user base in mind - it would require redoing code too often. Don\'t redevelop for 100x growth - it would make you slow and inflexible.</li>
</ul>
<strong>PEOPLE</strong><BR><BR>
Last but not least: People matter. Make the right hiring decisions.<BR>
<ul>
	<li>Small companies need young and passionate business/tech people who can hack stuff together and ship prototypes. Experience slows things down.</li>
	<li>Large companies need experienced people. Experienced people look out for bottlenecks and help climbing the walls to the next 10x  growth.</li>
</ul>
</div>';
        $post->created_at = '2015-08-14 14:29:00';
        $post->image_url = null;
        $post->author_id = 1;
        $post->save();

        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = '8 side business ideas for developers';
        $post->body = 'What do you do on weekends?<BR>
Play video games? Bar-hopping? Shopping?<BR>
<BR>
What about a hobby that does not cost but make money? What about starting a side business?<BR>
<BR>
Developers are in a unique position. They have the valuable skill of building products without the need of investing money. They can make ideas become reality.<BR>
<BR>
A side business is fun for several reasons. It gives the feeling of setting goals and making progress. It gives the feeling of not wasting but investing free time. It gives the feeling of “getting ahead of the game” and building financial independence.<BR>
<BR>
Having a side business improves coding skills, builds a professional network and (hopefully one day) makes some money. You learn how to own the business from end to end – including product, marketing, operations and business development. It also makes you a more valuable employee – since you gain basic knowledge of all essential business functions.<BR>
<BR>
You want to start something - but need an idea? Choose something from below.<BR>
<BR>
<strong>1. Coding tutorial website with high-quality videos</strong><BR>
<span style="text-decoration: underline;"><em>If you are exceptionally good at a framework and like teaching</em></span><BR>
Build something like <a href="http://www.laracasts.com" target="_blank">Laracasts.com</a>. Do it for the framework you have mastered. There is probably a lot of hidden demand for videos teaching PHP Symfony, PHP Zend, AngularJS, App development for IOS/Android. You might even get away with doing another Laravel website – if you do it in Chinese, Korean or Japanese.<BR>
<BR>
<strong>2. SaaS platform for Business Intelligence (BI)</strong><BR>
<span style="text-decoration: underline;"><em>If you have a good understanding of business metrics in startups</em></span><BR>
Online businesses need calculations for CLV (customer lifetime value) and CAC (customer acquisition cost).<BR>
It is hard to turn raw data into actionable BI numbers. In practise, this is either done by business analysts with MS Excel (which often lacks in capabilities) or through an app written by in-house BI-developers (which is very costly).<BR>
Build a Saas platform that receives data through an API (data on customers, sales, marketing expenses, variable expenses). Run your magic formulas for customer churn rates and expected purchases over lifetime. Provide your user with nicely formatted BI numbers and historic charts. Show CAC and CLV – segregated by product(-type) and marketing campaign.<BR>
<BR>
<strong>3. Marketplace for phone consultation by professionals</strong><BR>
<span style="text-decoration: underline;"><em>If you have experience in building marketplaces</em></span><BR>
Build a marketplace for professional consulting services over the phone - something like <a href="http://www.thetrustcall.com" target="_blank">TheTrustCall.com</a>. Do it for verticals with high customer retention – such as psychology or law. Have the best professionals of your vertical on the platform.<BR>
<BR>
<strong>4. Online shop for a niche product in a niche geography</strong><BR>
<span style="text-decoration: underline;"><em>If you have experience in e-commerce and in-depth knowledge of a niche</em></span><BR>
Niche e-commerce is the classic exampe of a side business. Nowadays it is hard to still find a profitable spot for cheap (long-tail) advertising. However, if you have deep e-commerce knowledge, live in a developing country and have an extraordinary hobby (Playing ukulele? Playing yoyo? Drink Whiskey?) - this might be the way to go.<BR>
<BR>
<strong>5. Local business CRM</strong><BR>
<span style="text-decoration: underline;"><em>If you have experience in selling to small businesses</em></span><BR>
Most local businesses underestimate the importance of keeping customers\' data. A dumbed-down CRM would add massive value to your local dentist, restaurant or barber shop.<BR>
Customers register via iPad with name and phone number. The CRM can contact customers individually or broadcast promotions. Distribution channels are SMS, Whatsapp and Facebook (Facebook account can be found by searching via phone number).<BR>
<BR>
<strong>6. Easy flashcard app</strong><BR>
<span style="text-decoration: underline;"><em>If you like studying languages (and have been using Anki </em>flash cards<em>)</em></span><BR>
A very effective way of learning language vocabulary is the spaced repetition flashcard system. The leading app is Anki and is relatively clunky to use: Adding a new flash card with audio recording requires 5 touches. Configuration has a lot of unnecessary settings. A simplified Anki would very likely find demand in language learning communities.<BR>
<BR>
<strong>7. Do-it-yourself IVR</strong><BR>
<span style="text-decoration: underline;"><em>If you have experience in telecommunications and small business sales</em></span><BR>
Phone call systems for small businesses: “Your call will be recorded. Press 1 to talk to customer service. Press 2 to leave a message. Press 3 to get our opening hours.”.<BR>
Twilio has made it easy for developers to build complex call-systems. If you can make it easy not just for developers but also for your lawyer next door - you might very well open up an underserved market.<BR>
The product could be a simple web-app where the user drag-and-drops IVR-elements and rules like Lego bricks. It needs to be easy and intuitive. Like Twilio, it should charge per minute.<BR>
<BR>
<strong>8. Braintree / Stripe for "high-risk" businesses</strong><BR>
<span style="text-decoration: underline;"><em>If you have deep knowledge in payments and API development</em></span><BR>
Braintree and Stripe made it easy for the average online business to charge and store (tokenized) credit cards. For the sake of a unified fee structure, both companies do not accept “high risk” online businesses. A business model is classified as "high risk" if it operates in a vertical that historically has comparatively high credit card chargeback rates – for example flight ticket sales, online dating or fortune telling. Companies in those lines of business still have to create a merchant account with a bank and integrate with a complex payment gateway API.<BR>
A Stripe for high-risk businesses that has a simple technical implementation but charges a slightly higher fee (for the increased risk) would very likely find great demand.<BR>
<BR>
<strong>Last but not least: Note of warning:</strong><BR>
Make sure your employer knows about your side business. Look at your employment contract - you might have to renegotiate specific clauses. Do not risk to breach your agreement. Make sure that your employer and your side business do something completely different. You want to avoid potential conflicts of interest. Once you make some revenue, create a separate legal entity for your project.';
        $post->created_at = '2015-08-15 15:50:00';
        $post->image_url = null;
        $post->author_id = 1;
        $post->save();


        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'Building MVPs with freelancers';
        $post->body = 'Internet startups begin with nothing but an idea and a founder. There is high uncertainty. There is little cash.<BR>
<BR>
As founder, it is your job to capture the maximum of opportunity with the minimum of risk. Your job is to provide a really appealing investment thesis. If you build an internet company, you are not in the market of taking risk - you are in the market of reducing risk.<BR>
<BR>
The upside of internet businesses is obvious - product distribution is uber-fast. Marginal cost is not existent. Good products become global within months. The downside is limited - bad products fail instantly.<BR>
<BR>
The investor\'s job is to find the winner first. Investors give money for products with traction. You need to show user engagement. You need to show customers. You need to show revenue.<BR>
<BR>
<strong>Lots of traction = Low risk</strong><BR>
<BR>
Eliminate risk. You don\'t do this with surveys or pretty powerpoints. You do this by testing the market. Begin with a super simple prototype - a minimum viable product. Market feedback shows if the idea is worth pursuing further.<BR>
<BR>
If nobody likes your product - iterate or pivot. If some people love your product - investors will be standing in lines to give you money.<BR>
<BR>
<strong>The market for freelancers</strong><BR>
<BR>
You are cash-strapped. You are "Pre-Series-A". You do not know how to code but you also do not have several million dollars to get an office, hire a bunch of people and get the business rolling. Your only way to MVP is the development via freelancers.<BR>
<BR>
The market for freelancers is very segregated. You basically have the choice between two categories:<BR>
<BR>
<strong>The cheap developer with the "standard-package"</strong><BR>
<BR>
You can hire the student that has just learnt how to configure a Wordpress blog. You can hire the Indian outsourcing company where you are client number 12321. You can hire that cheap philippine developer from the freelance platform - the person that changes clients like underwear and thus does not care about that sloppy database structure.<BR>
<BR>
The above developers serve a market need. If you need a simple blog or a newsletter signup landing page - the above developers are sensible choices. For the case of building MVPs though - I yet need to find a startup that has become successful with a cheap freelancer. All of the above-described developers are cheap because they have problems acquiring or retaining clients - the underlying problem is a lack of skill or lack of commitment.<BR>
<BR>
<strong>The pricey top-developer in your area "that has done it before"</strong><BR>
<BR>
You want to meet your developer face to face. Software is very complex - decisions about small details will be made by the developer himself. You have to make sure the developer understands the vision and overall business case in its details.<BR>
<BR>
Most top-developers work full-time - be it in the likes of Google or Facebook or in the newest quickly scaling startup that has just raised another multi-million dollar round. Top developers are very rare and uber-productive.<BR>
<BR>
<strong>You want the best, not the cheapest developer.</strong><BR>
<BR>
With experience, developer productivity increases exponentially because<BR>
<ul>
	<li>Function calls are used thousands of times. They are memorised. No need to check the documentation.</li>
	<li>A lot of work repeats itself. Development problems are solved using the appropriate "design pattern"</li>
	<li>Good code is reusable. That Paypal Express integration? What would usually take 1-2 weeks will take a few hours for the pro that has done it before.</li>
</ul>
Most top developers are satisfied with their stable and relatively safe jobs. Only a small fraction decides to do freelance on the side. Some just like the feeling of building a new project from scratch. Some just want to work with other technologies than what is used at work. Others just see how much more value they create and that employee productivity is not always 1 to 1 reflected in pay. Some Google employees even end up quitting their jobs and do nothing but freelance.<BR>
<BR>
<strong>How to get a top-developer</strong><BR>
<BR>
Put in the work. Use LinkIn to research who works at the best technology companies in your area. Try to find the developers\' website and private e-mail address. Consider even reaching out via Facebook. Always reply quickly if you get a response.';
        $post->created_at = '2015-08-17 16:16:00';
        $post->image_url = null;
        $post->author_id = 1;
        $post->save();



        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'The cash perpetuum mobile';
        $post->body = 'You make Google rich. You buy the banner click.<BR>
<BR>
The click is darn expensive. You better sell stuff to that stranger. Quickly. A lot. Repeatedly.<BR>
Sell more stuff - get more money - buy more clicks.<BR>
Sell more stuff - get more money - buy more clicks.<BR>
<BR>
GROWTH! <strong>The cash perpetuum mobile!</strong><BR>
<BR>
It\'s all simple - until it isn\'t.<BR>
<BR>
Thousands of people want the click. It matters how well you sell.<BR>
<BR>
Being the best is not enough. You need to be best by a great margin. Competitors don\'t know their numbers. They bid themselves into negative margins. They bid YOU into negative margins.<BR>
<BR>
Let the rabbit race begin! But... Didn\'t you start that business to escape from the rabbit race?<BR>
<BR>
Forget it!<BR>
<BR>
Only join that global game if you want it most. More than anyone in this world.<BR>
<BR>
You must have the most attractive ad.<BR>
You must have the best targeting.<BR>
You must have the shortest loading time.<BR>
You must have the best device compatibility.<BR>
You must have the most intuitive UI.<BR>
You must have the most payment methods.<BR>
You must have the best retention content.<BR>
You must be faster at figuring out that new marketing channel or technology.<BR>
<BR>
You must be better than anyone else in this world. Better by a margin.<BR>
<BR>
The best get the price - <strong>the cash perpetuum mobile</strong>! Until someone wants it more than you.';
        $post->created_at = '2015-08-19 08:19:00';
        $post->image_url = '/posts/10.jpg';
        $post->author_id = 1;
        $post->save();



        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'Why nobody likes your stuff';
        $post->body = 'You built that website, that app, that powerpoint, that thing. And nobody wants it.<BR>
<BR>
But it has the newest shit?!? Like web push notifications. Like real time web sockets. Like really nice diagrams.<BR>
<BR>
You fail.<BR>
Like 95% of your peers.<BR>
Feel the pain!<BR>
<BR>
All this time of building. For nothing. Nobody likes your stuff.<BR>
<BR>
Welcome reality!<BR>
<BR>
Every thought is assumption. You are wrong!<BR>
<BR>
People don\'t understand your value proposition.<BR>
People don\'t understand which one of the 3 buttons to click.<BR>
People don\'t care about your message.<BR>
<BR>
There is only one way to get out of this mess.<BR>
<BR>
MAKE IT OBVIOUS!!<BR>
<BR>
You have 2 seconds. Afterwards you are abandoned.<BR>
<BR>
Decide for them. Don\'t give options.<BR>
<BR>
<span style="line-height: 1.5;">One</span><span style="line-height: 1.5;"> touch - one purchase.</span><BR>
<BR>
No explanation.<BR>
<BR>
No reading.<BR>
<BR>
No attention required.<BR>
<BR>
Give your stuff to your grandmother. She has very few moments left until death. She better hurries... she has no time for your silly crap. She is like everyone else on this planet.<BR>
<BR>
Your stuff sucks because you need more than 2 seconds.<BR>
<BR>
Your thing fails because you feel entitled to more than 2 seconds.';
        $post->created_at = '2015-09-09 12:10:00';
        $post->image_url = null;
        $post->author_id = 1;
        $post->save();



        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'Hunt the right goals';
        $post->body = 'We made it! We got product-market fit! Our startup TheTrustCall.com regularly gets new customers. They buy the service. Marketing ROI is positive! We have achieved what most startups fail to deliver.<BR>
<BR>
Now what? Growth? Make the company huuuuge? Spend more on marketing? Get more of this sweet, sweet revenue?<BR>
<BR>
Bad idea! Never focus on revenue. Money is the root of all evil.<BR>
<BR>
Be very careful what carrot to chase.<BR>
<BR>
Here is what happens when you hunt the dollar:<BR>
<ul>
	<li> The experience after the sale will become second priority. Customers hate you after having spent that dollar with you. They want refunds. They spread the bad word. They surely never come back. Your company dies after everyone has tried the service or read about you.</li>
	<li>Your business processes become second priority. For each transaction, you do many boring manual steps. When doubling revenue, you have to double the grunt work. You either do the grunt by yourself or outsource it to poor lost souls. The lost souls escape once they find a better job. You are busy managing grunt work and hate yourself.</li>
</ul>
<ul>
	<li>A competitor with better conversion rates outbids you on marketing. Since you don\'t have returning customers, your revenue stream stops completely.</li>
</ul>
Don\'t get me wrong. Revenue is the lifeblood of a company. You need to make money to survive. "Revenue fixes everything" - but revenue comes in different quality.<BR>
<BR>
If you plan to grow your company for many years, better prioritize sustainability over quantity. Prioritize value creation over value extraction.<BR>
<BR>
Your key metrics should map things like...<BR>
<ul>
	<li>customer engagement</li>
	<li>customer retention / customer churn rate</li>
	<li>customer satisfaction</li>
	<li>supplier satisfaction</li>
	<li>variable operation expenses relative to revenue</li>
</ul>
Once you have raised outside money, focussing on the above becomes increasingly difficult. Investors push you to raise your valuation. When you are still small, take the chance to lay the right foundation for your business. Resist the urge to scale pre-maturly for the quick buck. Instead, build a small but fully automated system. Make customers and suppliers super happy. Make them love to engage with your business. Put this into your metrics.<BR>
<BR>
Hunt the right goals.';
        $post->created_at = '2015-09-22 15:28:00';
        $post->image_url = null;
        $post->author_id = 1;
        $post->save();



        // create first blog entries
        $post = new Post;
        $post->type = 'article';
        $post->title = 'Create value, capture value';
        $post->body = 'Founders often get this twisted:<BR>
<blockquote>Companies exist to make money. Startups should think about selling. Write business plans. Build excel sheets. Forecast revenues. Focus on extracting money.</blockquote>
Here is the catch:<BR>
<strong>It is very hard to extract money without creating value. </strong><BR>
<BR>
Customers do business with you because of the value you provide. Any sustainable business needs to create more value than it extracts.<BR>
<BR>
<strong>Efficient value creation is the hard part. Value extraction is easy.</strong><BR>
<strong>Your idea</strong><BR>
When evaluating a startup idea – don\'t focus on market size, VC trends, competition… Don\'t just think about making money. Forget margins, revenue forecasts, and customer acquisition channels.<BR>
<BR>
Instead, begin with <strong>unique value creation</strong>. How can you really be useful? How can you be the only one who is that useful?<BR>
<BR>
To whom will you be most useful? In what context will you be the most useful? Can you be so useful that people would use nothing else and start relying on you only?<BR>
<ul>
 	<li>Google brings knowledge in milliseconds</li>
 	<li>Facebooks keeps people connected for decades</li>
 	<li>AirBnb provides places to stay for a fraction of the usual cost</li>
 	<li>Uber provides the fastest and most convenient mode of transportation</li>
</ul>
If you create great value in a unique way - capturing a fraction of that value is not hard. Making money almost becomes an afterthought. If you are not creating enough value or lack differentiation - you sign up for a hard time.<BR>
<BR>
You need to constantly provide a good deal for people. You need to create more value than what you ask for in return. You have no problem with seeing a text ad in Google – because you get access to the world\'s knowledge in milliseconds.<BR>
<BR>
Start your startup idea brainstorming with questions like<BR>
<ul>
<ul>
 	<li>What am I especially good at? What do I enjoy doing? What is my outstanding skill?</li>
 	<li>Who would benefit most if that skill is applied? Those people are your target customers. They also typically live in a very different context. They might even be in a different social network and rarely talk to people with your skill.</li>
 	<li>How can I present the benefits to my target customers - so it gets understood?</li>
</ul>
</ul>
If you have very clear answers to the above, you will likely succeed. Start with charging very little to nothing. Build brand equity and reputation. Get testimonials and referrals. Automate. Productize. Make yourself the only viable option. Over time, you get the ability to capture more of the value you create.';
        $post->created_at = '2015-11-09 15:29:00';
        $post->image_url = null;
        $post->author_id = 1;
        $post->save();



    }
}
