                <?php
                
                use Illuminate\Database\Seeder;
                use Carbon\Carbon;
                
                class PostTableSeeder extends Seeder
                {
                /**
                * Run the database seeds.
                *
                * @return void
                */
                public function run()
                {
                //
                DB::table('posts')->insert([
                array('tittle'=>'Top 3 PHP Frameworks in 2016 ','content' =>'<p>According to recent statistics from <a class="external" href="http://w3techs.com/technologies/overview/programming_language/all" rel="nofollow">W3Techs</a>,&nbsp;PHP is the top sever-side scripting language used today. PHP has&nbsp;&nbsp;over 80% &nbsp;of the market share, with ASP.Net coming in at a distance 2nd with&nbsp;close to 16%. If you want to be a web developer, its really not a hard choice when it&nbsp;comes to what server-side scripting technology you should know and use.</p>
                
                <div class="wp-caption aligncenter" id="attachment_1748" style="width: 486px"><a href="http://www.developersfeed.com/wp-content/uploads/2016/02/ServerSideScripting2016Chart-1.png" rel="attachment wp-att-1748"><img alt="ServerSideScripting2016Chart" class="wp-image-1748 size-full" height="343" src="http://www.developersfeed.com/wp-content/uploads/2016/02/ServerSideScripting2016Chart-1.png" width="476" /></a>
                
                <p class="wp-caption-text">Server-Side Scripting Language Shares 2016</p>
                </div>
                
                <p>But, if you want to use PHP, you are faced with a much harder decision. You are probably thinking, which PHP framework should I use? Well according to Google Trends, the top 3 most popular&nbsp;PHP frameworks of the past 12 months are Laraval, Symphony, and Codeigniter.</p>
                
                <p>Below we will summarized the Top 3 PHP Frameworks in 2016.</p>
                
                <h3>#3 &ndash; <a class="external" href="https://symfony.com/" rel="nofollow">Symfony2</a></h3>
                
                <p><img alt="" src="http://hanusoft.dev:8000/upload/images/symfony_black_logo-e1454358538345.png" style="width: 378px; height: 130px;" /></p>
                
                <p>At number 3, Symfony is one of the most popular PHP frameworks in 2016. &nbsp;Symfony was created in 2005 by the Symfony Project and is a free framework, released under the MIT license. Symphone is powerful framework providing an impressive collection of decoupled and reusable components. This framework has a massive community of followers and is used by notable applications such as Drupal, phpBB, and eZ Publish.</p>
                
                <h3>#2 &ndash; <a class="external" href="https://www.codeigniter.com/" rel="nofollow">CodeIgnitor</a></h3>
                
                <p><img alt="" src="http://hanusoft.dev:8000/upload/images/codeigniter_logo-e1454358509607.png" style="width: 352px; height: 150px;" /></p>
                
                <p>CodeIgniter, the second most popular PHP framework of 2016,&nbsp;&nbsp;is an open source, agile web development PHP framework. &nbsp;Known for its tiny footprint and super fast performance, CodeIgniter also provides developers with a&nbsp;simple and elegant toolkit&nbsp;to easily develop powerful web-based applications</p>
                
                <h3>#1 &ndash; <a class="external" href="https://laravel.com/" rel="nofollow">Laravel</a></h3>
                
                <p><img alt="" src="http://hanusoft.dev:8000/upload/images/laravel-logo-e1454359445592.png" style="width: 320px; height: 120px;" /></p>
                
                <p>And the most popular PHP framework in 2016 (so far) is &nbsp;Laravel. Laravel has been the most popular for some time and does not seem to be fading anytime soon. Like the other 2, Laravel is a free, opensource, and powerful web application framework for PHP. Since its initial release in 2011,&nbsp;this framework has become one of the best modern PHP frameworks around, and is highly regarded by industry experts and developers. The&nbsp;Laravel framework is focused on &nbsp;elegance, simplicity, and readability.</p>
                
                <h3>Summary</h3>
                
                <p>Of course there are other PHP frameworks out there that may be a better fit for you, such as&nbsp;&nbsp;<a class="external" href="https://nette.org/en/" rel="nofollow" title="Nette Framework">Nette</a>, <a class="mw-redirect external" href="http://www.yiiframework.com/" rel="nofollow" title="Yii2">Yii2</a>&nbsp;, and <a class="external" href="http://framework.zend.com/" rel="nofollow">Zend</a>. Every developers has to do their own research and experimentation to determine the perfect fit for them. But for now, you know, in general, &nbsp;the Top 3 PHP Frameworks in 2016. Hope this will make your research and decision a little easier.</p>
                ', 'user_id' =>4,'type_id'=>1, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                array('tittle'=>'7 New Programming Languages To Learn in 2016','content' =>'<p><img alt="" src="http://hanusoft.dev:8000/upload/images/person-apple-laptop-notebook-large.jpg" style="width: 720px; height: 480px;" /></p>
                
                <p><span style="font-weight: 400;">Programmers have always known that</span><a href="http://www.codingdojo.com/blog/8-most-in-demand-programming-languages-of-2015/"><span style="font-weight: 400;"> new programming languages</span></a><span style="font-weight: 400;"> need to be learned to keep their skills marketable in the workplace. That trend is not only continuing &ndash; it seems to be increasing due to the rate of change taking place in the technology sector. &nbsp;</span></p>
                
                <p><span style="font-weight: 400;">Programming languages like C, C++, Java, HTML, Python, or PHP have always had answers to the demands of the market. However, progression in the innovation sector requires people to gain even more skills and knowledge to bring ideas to life. </span></p>
                
                <p><span style="font-weight: 400;">Even though programming languages like Java, HTML, Objective C, remain the backbone of any development in IT, there have been some new and interesting programming languages that have gained impressive reviews and high ratings among the tech gurus across the world. So, we decided to assemble a list of the&nbsp;new programming languages to learn and keep watch of&nbsp;in 2016.</span></p>
                
                <h3>1. Google Go</h3>
                
                <p><a href="https://golang.org/"><span style="font-weight: 400;">Google&rsquo;s Go Programming Language</span></a><span style="font-weight: 400;"> was created in 2009 by three Google employees, Robert Griesemer,&nbsp;Rob Pike, and&nbsp;Ken Thompson. The language&rsquo;s success can be seen clearly by the fact that BBC, SoundCloud, Facebook and UK Government&rsquo;s official website are some of the notable users of Go. It is faster, easier to learn and does the same job that C++ or Java has been doing for us. As the creators said, &ldquo;Go is an attempt to combine the ease of programming of an interpreted, dynamically typed language with the efficiency and safety of a statically typed, compiled language.</span></p>
                
                <h3><span style="font-weight: 400;">2. Swift</span></h3>
                
                <p><span style="font-weight: 400;">When a programming language is launched at the Apple&rsquo;s WWDC, you can be sure that it has something that can deliver success and results. Swift was released in the Apple&rsquo;s WWDC in 2014 and its exponential growth in just one year shows how capable and promising this language is. According to Apple, </span><a href="https://developer.apple.com/swift/"><span style="font-weight: 400;">Swift brings the best of Python and Ruby together </span></a><span style="font-weight: 400;">and adds modern programming fundamentals, to make it more effective and fun. If you&rsquo;ve been using or were planning on learning Objective C to develop iOS apps, don&rsquo;t bother learning it. Swift is the language you need to know moving forward. There will soon come a day when Objective C is used by nobody to develop apps.</span></p>
                
                <h3><span style="font-weight: 400;">3. Hack</span></h3>
                
                <p><span style="font-weight: 400;">Just like Swift, </span><a href="http://hacklang.org/"><span style="font-weight: 400;">Hack </span></a><span style="font-weight: 400;">is another programming language which has recently been launched and is a product of another tech giant, Facebook. In the past one year, Facebook has transformed almost their entire PHP codebase to Hack, and if a website with millions of users and unparalleled traffic &nbsp;can rely on Hack, then the programming language must surely be here to stay.</span></p>
                
                <h3><span style="font-weight: 400;">4. Rust</span></h3>
                
                <p><a href="https://www.rust-lang.org/"><span style="font-weight: 400;">The Rust Programming Language</span></a><span style="font-weight: 400;"> was launched in 2014 by Mozilla. It did not receive the immediate success that Hack and Go did, but in the last 6 months the number of Rust users in the world has escalated and it is expected to climb much higher. An upgrade to C and C++, Rust is becoming more beloved by programmers every day.</span></p>
                
                <h3><span style="font-weight: 400;">5. Julia</span></h3>
                
                <p><span style="font-weight: 400;">Delivering Hadoop style parallelism, Julia&rsquo;s stock in the tech industry is rising. </span><a href="http://julialang.org/"><span style="font-weight: 400;">The Julia Language</span></a><span style="font-weight: 400;"> is highlighted as one that is destined to make a major impact in the future. Described as a high level, high performance, dynamic programming language for technical computing, Julia is making a niche of its own in the world of programming languages.</span></p>
                
                <h3><span style="font-weight: 400;">6. Scala</span></h3>
                
                <p><a href="http://www.scala-lang.org/"><span style="font-weight: 400;">The Scala Programming Language</span></a><span style="font-weight: 400;"> has been on the market for a little longer than most of the other languages in this list and was probably a little slow to get off the blocks as compared to the other langua</span><b>7 New Programming Languages To Learn in 2016</b></p>
                
                <p><span style="font-weight: 400;">ges. However; this functional and highly scalable programming languages has gradually attracted attention and companies such as Twitter, LinkedIn and Intel are using the language in their system now.</span></p>
                
                <h3><span style="font-weight: 400;">7. Dart</span></h3>
                
                <p><span style="font-weight: 400;">Given that Google Go has garnered such unprecedented success, the other language from Google &ndash; </span><a href="https://www.dartlang.org/"><span style="font-weight: 400;">Google Dart</span></a><span style="font-weight: 400;"> &ndash; has been in its shadows for the past 7-8 months. However, now that app development is gaining pace, people are realising how useful Dart can be in implementing high performance architecture and performing modern app development. Unveiled as a substitute for Javascript for browser apps, Dart is finally realising its true potential and is expected to continue its rise in the coming years.</span></p>
                
                <p>What other languages are worth keeping an eye out for in the year ahead? Drop a line in the comments section!</p>
                ', 'user_id' =>5,'type_id'=>1, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                array('tittle'=>'The 2016 Top Programming Languages','content' =>'<p>Welcome to <em>IEEE Spectrum</em>&rsquo;s <a href="http://spectrum.ieee.org/static/interactive-the-top-programming-languages-2016">third interactive ranking</a> of the most popular programming languages. As it&rsquo;s impossible to look over the shoulder of every programmer, <em>Spectrum</em> uses various metrics as proxies for gauging the current use of a language. Working with data journalist <a href="http://www.nickdiakopoulos.com/">Nick Diakopoulos,</a> from 10 online sources we&rsquo;ve chosen 12 metrics, each one of which gives insight along a different axis of popularity. Combining the metrics produces a single ranking.</p>
                
                <p>Because each of you may value different things&mdash;What&rsquo;s hot with the folks in open source? What are employers demanding?&mdash;<em>Spectrum</em>&rsquo;s <a href="http://spectrum.ieee.org/static/interactive-the-top-programming-languages-2016">Interactive Top Programming Languages</a> lets you adjust the weight of each metric in contributing to the ranking. You also have the option to filter the results: for example, looking only at languages used in embedded systems or mobile applications. You can customize each weighting yourself or use one of our presets.</p>
                
                <p>The default preset is intended to echo the interests of the average IEEE member. So what are <em>Spectrum</em>&rsquo;s Top Ten Languages for 2016?</p>
                
                <p><img alt="" src="http://hanusoft.dev:8000/upload/images/Mjc5MjI0Ng.png" style="width: 636px; height: 369px;" /></p>
                
                <p>After two years in second place, <a href="http://www.c-faq.com/">C</a> has finally edged out <a href="https://www.oracle.com/java/index.html">Java</a> for the top spot. Staying in the top five, <a href="https://www.python.org/">Python</a> has swapped places with <a href="https://isocpp.org/">C++</a> to take the No. 3 position, and <a href="https://msdn.microsoft.com/en-us/library/67ef8sbd.aspx">C#</a> has fallen out of the top five to be replaced with <a href="https://www.r-project.org/about.html">R.</a> R is following its momentum from previous years, as part of a positive trend in general for modern big-data languages that <span>Diakopoulos</span> <a href="http://spectrum.ieee.org/computing/software/top-programming-languages-trends-the-rise-of-big-data">analyses in more detail here</a>.</p>
                
                <p>Google and Apple are also making their presence felt, with Google&rsquo;s <a href="https://golang.org/">Go</a> just beating out Apple&rsquo;s <a href="https://developer.apple.com/swift/">Swift</a> for inclusion in the Top Ten. Still, Swift&rsquo;s rise is impressive, as it&rsquo;s jumped five positions to 11th place since last year, when it first entered the rankings. Several other languages also debuted last year, a marked difference from this year, with no new languages entering the rankings.</p>
                
                <aside class="inlay rt sm">
                <figure role="img"><figcaption></figcaption><a href="http://spectrum.ieee.org/static/interactive-the-top-programming-languages-2016"> </a></figure>
                </aside>
                
                <p>Other notable changes include <a href="http://www.ladder-logic.com/hello-world/">Ladder Logic,</a> rising five positions to 34th place. Ladder Logic is used in programmable logic controllers, especially those used in factories. Although manufacturing may seem like a narrow niche for a language, its relative popularity indicates just how big that niche really is. <a href="https://www.w3.org/html/">HTML</a> also continues to be popular, rising to 16th place, despite the horror of some previous users of the Top Programming Languages that it&rsquo;s included at all (for the record, we take a pragmatic approach and define a programming language as a distinct syntax that is used to give a computer instructions, even if those&nbsp;are just instructions on how data should be structured; Turing completeness is not required).</p>
                
                <p>On the losing side, perhaps the most surprising is that Shell programming&mdash;a catchall term for the creation of scripts of the sort beloved by system administrators, using shells such as <a href="https://www.gnu.org/software/bash/">bash</a>&mdash;has declined in popularity, falling seven positions to 19th place. This may reflect the development of more sophisticated systems to manage cloud-based data centers, but we&rsquo;ll have to wait to see if the trend continues next year or if this is just a statistical fluke.</p>
                ', 'user_id' =>1,'type_id'=>1, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                array('tittle'=>'Top Programming Languages Used in Web Development','content' =>'<p>With the popularity and advancements in web technology, it is imperative for every business to have a website and one which is highly functional and visually attractive. The process through which a good website, mobile apps or other similar platforms are created is known as web development. One of the most integral aspects of web development is web programming that is achieved with the help of programming languages. Web development languages are the platforms through which instructions are communicated to a machine and actions are pursued.</p>
                
                <p><img alt="" src="http://hanusoft.dev:8000/upload/images/502-Top-Programming-Languages-used-in-Web-Development.png" style="width: 740px; height: 487px;" /></p>
                
                <p>n this article, we shall learn more about 1) <strong>web development and programming languages</strong> as well as 2) focus on the <strong>most popular programming languages</strong> in the world.</p>
                
                <h1>WEB DEVELOPMENT: AN INTRODUCTION</h1>
                
                <p>Web development is a term that is used to refer to the process of creating a website and can range from developing a single simple page to a series of complex pages. Web development encompasses several actions or practices and some of them include <a href="https://www.cleverism.com/web-design-principles-successful-websites/" target="_blank">web design</a>, content creation, programming, network security tasks as well as client side or server side scripting, etc. In the recent few years, web development has taken the definition of the creation of content management systems or CMS, which is the mid-step between the user and the database. In order to pursue web development as a profession, one of the most important things that you will need to consider is having expertise in programming languages.</p>
                
                <h1>WHAT ARE PROGRAMMING LANGUAGES?</h1>
                
                <p>A programming language is used to control the actions of a machine. Such a language is a properly drafted or constructed language when it is designed in such a way that through it instructions can be communicated to a computer system. Ever since the invention of computers, thousands of programming languages have been created, and more are being created every year.</p>
                
                <p>A programming language is generally split into two components that are the semantics and the syntax. Where on one hand the syntax is the form or type, the semantics are the meaning of that type or form. Every programming language is different; where on one hand, some may be marked by a specification documents, others may have a dominant implementation or a reference. A programming language thus broadly is a notation that helps to write programs that are identified as an algorithm.</p>
                
                <h2>Traits of a programming language</h2>
                
                <p>The features or characteristics of a programming language can be referred to as <a href="http://www.emu.edu.tr/aelci/Courses/D-318/D-318-Files/plbook/intro.htm" rel="external nofollow" target="_blank">its traits</a>. The following are the three main traits of such languages that you must know about:</p>
                
                <ul>
                <li><strong>Abstractions</strong> &ndash; Most of the programming languages have certain rules that help us define or mark the data structures as well as manipulate the way in which the commands are executed. These rules are referred to as abstractions. Every language needs to be supported by sufficient abstractions and this need is defined by the abstraction principle. The abstraction principle in some cases is derived as the recommendations given to a web programmer so that he/she makes the correct use of abstractions.</li>
                <li><strong>Function and target</strong> &ndash; When you make use of a programming language, then besides doing the writing work on your own, you also need the help of the computer system that performs the computation work or controls the algorithm. The computer also controls the external devices associated such as the printer, the robots, etc. Thus, the complete definition of a programming language includes a description or a machine or processor that has been idealized for that language. This is one reason why programming languages differ from human languages of interaction.</li>
                <li><strong>Expressive power</strong> &ndash; Languages are <a href="http://en.wikipedia.org/wiki/Programming_language" rel="external nofollow" target="_blank">mostly classified</a> by the computations that they are able to express. This very expressive power is yet another trait of programming languages and is an important one.</li>
                </ul>
                
                <h2>Factors to be considered when choosing a programming language</h2>
                
                <p>Since there are so many different types of programming languages, it can be difficult for a web developer to select which one to use and which one to leave. There are certain factors on the basis of a decision can be made, and they are given as follows:</p>
                
                <ul>
                <li><strong>Targeted platform</strong> &ndash; The first thing you need to decide is where the program will be run. Not all languages are capable of running on all kinds of platforms. For example, a program written in C language requires compilers to run on Windows and Linux based systems.</li>
                <li><strong>Language domain match</strong> &ndash; The language must be chosen on the basis of the problem domain that you have. One of the better ways to do so is by searching that language others in the same domain or industry are using or by trying to look for a code that resolves the issues that you may have.</li>
                <li><strong>Efficiency</strong> &ndash; The compilers that go well with the language you choose must be efficient so as to make the language perform fast.</li>
                <li><strong>Elasticity and Performance</strong> &ndash; The language you choose must be flexible enough to let you add more programs or features in it. Also, its overall performance must be to your suitability and liking.</li>
                <li><strong>Availability of libraries</strong> &ndash; There must be a library that is capable of solving all your problems with the language that you select for web development.</li>
                <li><strong>Project size</strong> &ndash; There are two types of programming&rsquo;s: large and small. You must select a language that can support your cause and suits the project size well.</li>
                <li><strong>Expressiveness &amp; Time to production</strong> &ndash; Make sure you pick that language that is highly expressive and the time taken to produce the programs or codes is not very bothersome to you.</li>
                <li><strong>Tool support</strong> &ndash; Buy a tool-oriented language that offers you many elements and ways to edit, control and work.</li>
                </ul>
                
                <h1>THE MOST POPULAR PROGRAMMING LANGUAGES</h1>
                
                <p>The universe of programming languages is wide and knowing all or learning each one of them is neither practical nor possible. If you are a developer who is interested in learning the most useful and popular ones, then you must first know which ones of the thousands of languages to learn. Thankfully, there are <a href="http://githut.info/" rel="external nofollow" target="_blank">certain websites</a> and platforms that create lists of the top languages, according to their popularity. The list of the top 15 programming languages of this year are given below, and it is clear that JavaScript is the most popular followed closely by Java, Python, and others.</p>
                
                <h2>Top 15 programming languages in 2015</h2>
                
                <ol>
                <li>JavaScript</li>
                <li>Java</li>
                <li>Python</li>
                <li>CSS</li>
                <li>PHP</li>
                <li>Ruby</li>
                <li>C++</li>
                <li>C</li>
                <li>Shell</li>
                <li>C#</li>
                <li>Objective C</li>
                <li>R</li>
                <li>VimL</li>
                <li>Go</li>
                <li>Perl</li>
                </ol>
                
                <p>Let&rsquo;s learn about some of these top languages in detail.</p>
                
                <h3>1.&nbsp;&nbsp; JavaScript</h3>
                
                <p>JavaScript is one of the most popular and dynamic programming languages used for creating and developing websites. This language is capable of achieving several things including controlling the browser, editing content on a document that has been displayed, allowing client-side scripts to communicate with users and also asynchronous communication. It was developed by Netscape and borrows a lot of its syntax from C language. JavaScript is used very widely and effectively in creating desktop applications as well as for developing games.</p>
                
                <p>One of the best things about JavaScript for you as a developer or a website owner is that this is one of the few programming languages that are accepted and supported by all the major browsers without the need of any compilers or plug-ins. It can also be worked with on platforms that are not web-based, for example-desktop widgets and PDF docs. This is a multi-paradigm language which means that it has a combination of features. Also, JavaScript supports functional and object-oriented programming styles.</p>
                
                <p>The features of a language define the way it will work, the way it responds, how easy is its code and what it can achieve. The following are some of the main features of JavaScript programming language for your reference:</p>
                
                <ul>
                <li><strong>Structured</strong> &ndash; JavaScript is a highly structured language with a proper and planned syntax that has been derived from C. This language too has a function scoping by it lacks block scoping, unlike C. It too differentiates between statements and expressions, just like the fundamental C web programming platform.</li>
                <li><strong>Dynamic</strong> &ndash; The types in JavaScript are not related with variables but with values. This is a dynamic programming language that enables you to test the type of an object in many different ways. Also, this programming language is object-oriented where all the objects are associative arrays.</li>
                <li><strong>Functional</strong> &ndash; All functions in JavaScript are objects and are all first-class. They are associated with their own functions as well as characteristics. For example, a function within a function is called a nested function whereas this language also supports anonymous function.</li>
                </ul>
                
                <h3>2.&nbsp;&nbsp; Java</h3>
                
                <p>Java is yet another highly popular and widely used language that you can consider for web development. This language is an object-oriented, class-based and concurrent language that was developed by Sun Microsystems in the 1990s. Since then, the language continues to be the most in-demand language that also acts as a standard platform for enterprises and several mobile and games developers across the world. The app has been designed in such a way that it works across several types of platforms. This means that if a program is written on Mac Operating system then it can also run on Windows based operating systems.</p>
                
                <p>Java, when it was designed originally, was developed for interactive television, but the developers realized that this language and technology was way too forward for this industry. It was only later that it was incorporated into the use it serves today.</p>
                
                <p>Every language is created with a certain mission, goal or objective in mind. The following are the 5 major principles or goals that were kept in mind during the creation of this language:</p>
                
                <ul>
                <li>It must be a secure and robust programming language</li>
                <li>It must be an object-oriented, simple language which becomes familiar soon.</li>
                <li>It must be capable of being implemented and executed with high performance.</li>
                <li>It must be threaded, dynamic and interpreted.</li>
                <li>It must be portable and architecture-neutral.</li>
                </ul>
                
                <h3>3.&nbsp;&nbsp; Python</h3>
                
                <p>Python is a highly used and all-purpose programming language which is dynamic in nature. Being dynamic in nature means that you as a developer can write and run the code without the need of a compiler. The design of the language is such that it supports code readability which means that its syntax is such that only a few lines of codes are needed to express a point or a concept. This concept of code readability is also possible in the case of Java and C++, etc. This is a high-level or advanced language that is considered easy for beginners to understand and learn.</p>
                
                <p>Some of the apps that are powered by Python are Rdio, Instagram, and Pinterest. Besides this, some other web platforms that are supported by Python are Django, Google, NASA, and Yahoo, etc. Some of the other features of this language include automatic memory management, large library, dynamic type system and support of many paradigms.</p>
                
                <p>Python works on a core philosophy and follows its main principles in all seriousness. The language was designed with the aim of making it highly extensible. This means that the language can easily be incorporated or embedded in existing applications. The goal of the developers of this language was to make it fun to use one. The developers worked on the language in such a way that it could reduce upon premature optimization. Here&rsquo;s a look at some of the principles that have been summarized for you:</p>
                
                <ul>
                <li>Readability is important</li>
                <li>Complex is better than complicated-</li>
                <li>Beautiful is better than ugly</li>
                <li>Simple is better than complex</li>
                <li>Explicit is better than implicit</li>
                </ul>
                
                <h3>4.&nbsp;&nbsp; CSS</h3>
                
                <p>CSS or Cascading Style Sheets is rather a markup language. When paired with HTML, CSS allow a developer to decide and define how a web page or a website will eventually look or how it will appear to the visitors of the web platform. Some of the elements which CSS has an impact on include font size, font style, the overall layout, the colors and other design elements. This is a markup language that can be applied to several types of documents including Plain XML documents, SVG documents as well as XUL documents. For most websites across the world, CSS is the platform to opt for if they need help to create visually attractive webpages and finds use not just in the creation of web applications but also mobile apps.</p>
                
                <p>The language&rsquo;s syntax is pretty similar to that of HTML and XHTML, which work well in synchronization and combination of one another. The Style sheets included in CSS consist of a selector and a declarator. The simple syntax of the language uses several English language words to define the styling properties.</p>
                
                <h3>5.&nbsp;&nbsp; PHP</h3>
                
                <p>The term &lsquo;PHP&rsquo; is used to <a href="http://en.wikipedia.org/wiki/PHP" rel="external nofollow" target="_blank">define PHP Hypertext Processor</a> language that is a free server-side scripting language that has been designed for not just web development but also as a general-purpose programming platform. This is a widely used language that was created in the year 2004 and now powers over 200 million websites worldwide. Some popular examples of websites powered by this platform include <a href="https://www.cleverism.com/using-facebook-business-purposes/" target="_blank">Facebook</a>, <a href="https://www.cleverism.com/wordpress-how-to-use-for-business/" target="_blank">WordPress</a>, and Digg.com.</p>
                
                <p>PHP is an interpreted script language which means that it is usually processed by an interpreter. For this reason, the language is most suitable for server-side programming that have server tasks being repeatedly performed when the website development process is on.</p>
                
                <p>The following are some more points that shall help you understand the language better:</p>
                
                <ul>
                <li>PHP is an open source language and fast prototyping language.</li>
                <li>This language is compatible with UNIX based OS as well as Windows OS.</li>
                <li>Some industries where PHP is mostly used include startup businesses, advertising apps, and small software organizations as well as media agencies.</li>
                <li>The language can be embedded in HTML directly.</li>
                </ul>
                
                <h3>6.&nbsp;&nbsp; Ruby</h3>
                
                <p>Developed in the year 1993, Ruby is a dynamic programming language that is used for the creation or programming of mobile apps and websites. The language successfully balances imperative programming with functional programming and is a highly scalable language. This open source platform is not only simple to understand but also easy to write. But if you are a developer who wants to learn Ruby, then you will also have to equip yourself with the knowledge of Ruby on Rails or Rails which is another framework which can help you make it interesting to deal with Ruby. For those who are interested in creating small business software and for those who are into the field of creative designing, Ruby is the perfect programming language.</p>
                
                <p>During its development, the idea was to come up with a language that was more productive in terms of programming and has a concise and simple code. Ruby is mostly used in the web servers where there is a lot of web traffic. Some examples of platforms that make use of this programming language include Hulu, <a href="https://www.cleverism.com/twitter-how-to-use-business/" target="_blank">Twitter</a>, and Scribd, etc.</p>
                
                <h3>7.&nbsp;&nbsp; C++</h3>
                
                <p>C++ is a general purpose, well compiled and case sensitive web programming language that is not only imperative but also offers facilities for low-level memory manipulation. Since the language makes use of both low-level features as well as the feature of high-level languages, it is considered as a middle-level language. This language was developed by Bjarne Stroustrup starting in the year 1979 and was later enhanced and renamed in 1983. Since C++ is an object oriented language, it supports the 4 principles of object oriented development including polymorphism, encapsulation, inheritance, and data hiding.</p>
                
                <p>C++ is similar to C language in a lot of ways and is in fact the superset of C. This means that any program of C language is a program of C++ programming language. The language has many technical details, but the key to learning this language for you is not to get lost in these details but rather concentrate on its concepts.</p>
                
                <p>Like any other language, this language too based on a philosophy and has certain elements that make it what it really is. C++ consists of three important parts, and they are given as follows:</p>
                
                <ul>
                <li><strong>The standard library of C++</strong> is capable of giving a rich combination and gamut of features such as strings and manipulating sets, etc.</li>
                <li><strong>The standard template library</strong> or STL is capable of giving a rich set of methods manipulating data structures and other elements.</li>
                <li><strong>The core C++ language</strong> has the capability of giving the building elements like literals, data types, and variables.</li>
                </ul>
                
                <h3>8.&nbsp;&nbsp; C Language</h3>
                
                <p><a href="http://en.wikipedia.org/wiki/C_%28programming_language%29" rel="external nofollow" target="_blank">C</a> is another general-purpose and imperative programming language which was developed way back in the 70s and is similar to C++ language. This language is known to be the most widely used programming platform that offers building elements for other languages like C++, Python, Java and others. These languages borrow features either directly or indirectly from it, and some of these include control structures, overall syntax, and standard libraries. This is the reason why if you want to learn programming, it is advisable that you learn C and C++ first and then move onto the others after strengthening your foundation. Some of the features that this language supports include static type system, lexical variable scope, recursion and structured programming.</p>
                
                <p>The following are some of the points which shall help you understand the overall design of C language:</p>
                
                <ul>
                <li>C is a procedural or imperative language</li>
                <li>The language was designed in such a way that can be easily compiled by making use of a simple compiler.</li>
                <li>The language was designed to offer a low-level access to memory.</li>
                <li>It was designed in a way that it should need minimum possible run-time support and encourages cross-platform programming.</li>
                </ul>
                
                <p>&nbsp;</p>
                ', 'user_id' =>2,'type_id'=>1, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                array('tittle'=>'SEO Basics: 8 Essentials When Optimizing Your Site','content' =>'<p>Basic search engine optimization (<a href="https://searchenginewatch.com/category/seo/">SEO</a>) is fundamental. And essential. SEO will help you position your website properly to be found at the most critical points in the buying process or when people need your site.</p>
                
                <p>What are search engines looking for? How can you build your website in a way that will please both your visitors/customers, as well as Google, Bing, and other search engines? Most importantly, how can SEO help your web presence become more profitable?</p>
                
                <p>During the Introduction to SEO session at <a href="http://sesconference.com/archive/2013/newyork/" target="_blank">SES New York</a>, Carolyn Shelby (<a href="https://twitter.com/cshel">@CShel</a>), Director of SEO, Chicago Tribune/<a href="http://435digital.com/">435 Digital</a>, fully explained the extreme value SEO can deliver to a site, and stressed the importance of basic SEO using the following analogy:</p>
                
                <p>&ldquo;Skipping the basics and spending all your time and money on social and &lsquo;fancy stuff&rsquo; is the same as skipping brushing your teeth and showering, but buying white strips and wearing expensive cologne,&rdquo; Shelby said.</p>
                
                <p>Although the Introduction to SEO session was intended for industry newcomers, Shelby&rsquo;s tips offer important reminders for even experienced SEO professionals who have been optimizing sites for years.</p>
                
                <h3>What is SEO, Exactly?</h3>
                
                <p>The goal of foundational SEO isn&rsquo;t to cheat or &ldquo;game&rdquo; the search engines. The purpose of SEO is to:</p>
                
                <ul>
                <li>Create a great, seamless user experience.</li>
                <li>Communicate to the search engines your intentions so they can recommend your website for relevant searches.</li>
                </ul>
                
                <h3>1. Your Website is Like a Cake</h3>
                
                <p><img alt="" src="http://hanusoft.dev:8000/upload/images/think-of-your-site-like-a-cake.png" style="width: 600px; height: 368px;" /></p>
                
                <p>Your links, paid search, and social media acts as the icing, but your content, information architecture, content management system, and infrastructure act as the sugar and makes the cake. Without it, your cake is tasteless, boring, and gets thrown in the trash.</p>
                
                <h3>2. What Search Engines Are Looking For</h3>
                
                <p>Search engines want to do their jobs as best as possible by referring users to websites and content that is the most relevant to what the user is looking for. So how is relevancy determined?</p>
                
                <ul>
                <li><strong>Content:</strong> Is determined by the theme that is being given, the text on the page, and the titles and descriptions that are given.</li>
                <li><strong>Performance:</strong> How fast is your site and does it work properly?</li>
                <li><strong>Authority:</strong> Does your site have good enough content to link to or do other <a href="http://searchenginewatch.com/article/2201022/How-to-Find-Authority-Websites-Get-Links-From-Them">authoritative sites</a> use your website as a reference or cite the information that&rsquo;s available?</li>
                <li><strong>User Experience:</strong> How does the site look? Is it easy to navigate around? Does it look safe? Does it have a high <a href="http://searchenginewatch.com/article/2237250/Reduce-Bounce-Rate-20-Things-to-Consider">bounce rate</a>?</li>
                </ul>
                
                <h3>3. What Search Engines Are NOT Looking For</h3>
                
                <p>Search engine spiders only have a certain amount of data storage, so if you&rsquo;re performing shady tactics or trying to trick them, chances are you&rsquo;re going to hurt yourself in the long run. Items the search engines don&rsquo;t want are:</p>
                
                <ul>
                <li><strong>Keyword Stuffing:</strong> Overuse of keywords on your pages.</li>
                <li><strong>Purchased Links:</strong> Buying links will get you nowhere when it comes to SEO, so be warned.</li>
                <li><strong>Poor User Experience:</strong> Make it easy for the user to get around. Too many ads and making it too difficult for people to find content they&rsquo;re looking for will only increase your bounce rate. If you know your bounce rate it will help determine other information about your site. For example, if it&rsquo;s 80 percent or higher and you have content on your website, chances are something is wrong.</li>
                </ul>
                
                <h3>4. Know Your Business Model</h3>
                
                <p>While this is pretty obvious, so many people tend to not sit down and just focus on what their main goals are. Some questions you need to ask yourself are:</p>
                
                <ul>
                <li>What defines a conversion for you?</li>
                <li>Are you selling eyeballs (impressions) or what people click on?</li>
                <li>What are your goals?</li>
                <li>Do you know your assets and liabilities?</li>
                </ul>
                ', 'user_id' =>3,'type_id'=>1, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                array('tittle'=>'Class aptent taciti sociosqu ad litora torquent 12','content' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.
                Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a. Curabitur nulla dui, fermentum sed dapibus at, adipiscing eget nisi. Aenean iaculis vehicula imperdiet. Donec suscipit leo sed metus vestibulum pulvinar. Phasellus bibendum magna nec tellus fringilla faucibus. Phasellus mollis scelerisque volutpat. Ut sed molestie turpis. Phasellus ultrices suscipit tellus, ac vehicula ligula condimentum et.
                Aenean metus nibh, molestie at consectetur nec, molestie sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec euismod urna. Donec gravida pharetra ipsum, non volutpat ipsum sagittis a. Phasellus ut convallis ipsum. Sed nec dui orci, nec hendrerit massa. Curabitur at risus suscipit massa varius accumsan. Proin eu nisi id velit ultrices viverra nec condimentum magna. Ut porta orci quis nulla aliquam at dictum mi viverra. Maecenas ultricies elit in tortor scelerisque facilisis. Mauris vehicula porttitor lacus, vel pretium est semper non. Ut accumsan rhoncus metus non pharetra. Quisque luctus blandit nisi, id tempus tellus pulvinar eu. Nam ornare laoreet mi a molestie. Donec sodales scelerisque congue.', 'user_id' =>6,'type_id'=>2, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
                ]);
                
                }
                }
