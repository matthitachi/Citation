<?php
/**
 * Created by PhpStorm.
 * User: ITACHI
 * Date: 10/26/2018
 * Time: 10:25 AM
 */

$meta = array(
    'apa'=>['title'=>'APA Annotated Bibliography Generator - Set by the America Psychological Association','desc'=>'We are providing APA bibliography services for over 10 years which is highly useful in academic research in all the educational institutes of the world'],
    'mla'=>['title'=>'Annotated MLA Format Bibliography is used as per of Modern Language Association','desc'=>'We offer services that enable the students to learn more about MLA bibliography, which will help in delivering enhanced quality papers for the research'],
    'chicago'=>['title'=>'Free Chicago Style Bibliography to Cite your Papers Online','desc'=>'Use Chicago bibliography machine to generate accurate citations for your college papers. Sign up for premium mode and get full access now'],
    'ama'=>['title'=>'AMA Bibliography Format to Cite your Papers Automatically','desc'=>'Use AMA bibliography software to generate accurate citations for your medicine papers. Sign up for premium mode and enjoy all the associated benefits'],
    'acs'=>['title'=>'ACS Bibliography Generator to Reference your Chemistry Papers','desc'=>'Get the Grade A you deserve by using ACS bibliography machine to generate references for your chemistry papers. Sign up and get full access now'],
    'asa'=>['title'=>'ASA Annotated Bibliography Maker - Quickly and Conveniently','desc'=>'content="ASA bibliography is one of the most important citation techniques currently. Let your rigorous academic citation work take a breather and use our ASA citation"'],
    'ieee'=>['title'=>'IEEE Format Bibliography - Satisfying All Your Needs','desc'=>'Generating a bibliography/reference list may prove difficult especially for novice students. Our IEEE bibliography tool presents a specialized way for'],
    'bluebook'=>['title'=>'Bluebook','desc'=>'Bluebook'],
    'apsa'=>['title'=>'APSA Format Bibliography Generator - Instant referencing','desc'=>'Use our APSA bibliography and citation maker for all the tough assignments that you need to hand in by yesterday. Why burn the midnight oil when we\'ve got you'],
    'harvard'=>['title'=>'Harvard Bibliography Maker - Easier Tool','desc'=>'Don\'t get confused with your Harvard citation work. Our Harvard bibliography creator brings it all to life with a simple click'],

);

?>

        <!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$meta[$style]['desc']}}" />
    <meta name="keywords" content=" Referencing tools, referencing tool, citation machine, Harvard referencing generator, Harvard referencing tool, Harvard referencing, APA referencing generator, APA referencing tool, MLA referencing tool, APA referencing, APA style, MLA referencing generator, Chicago referencing generator, Online Citation Generator, Online referencing tools, Online referencing tool, Online citation machine, Online citation tool" />
    <meta name="author" content="Citation" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title -->
    <title>{{$meta[$style]['title']}} | {{strtoupper($source)}} Citation</title>
    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{asset('images/icon.png')}}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />

    <!-- themify Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/pe-icon-7.css')}}">

    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors/default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/shortcode.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.css')}}" />

</head>

<body>

<!-- Pre-loader -->
<!--<div id="preloader">-->
<!--<div id="status">-->
<!--<div class="spinner">Loading...</div>-->
<!--</div>-->
<!--</div>-->
<!-- End Preloader-->

<!--Navbar Start-->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <!-- LOGO -->
        <a class="" href="/">
            <img src="/images/logo.png" alt="" class="logo-light" height="35" />
            <!--<img src="images/logod.png" alt="" class="logo-dark" height="74" />-->
            {{--<h3 style="color: brown;">Citation</h3>--}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-arrow-down"></i>
        </button>
        <div class="navbar-custom collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="/" class="nav-link">Home</a>
                </li>
                {{--<li class="nav-item">--}}
                    {{--<a href="index.html" class="nav-link">About</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a href="#" class="nav-link">Features</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a href="#" class="nav-link">Process</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a href="#" class="nav-link">Pricing</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a href="#" class="nav-link">FAQ</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#" class="nav-link" data-toggle="modal" data-target="#ModalCenter">Contact</a>--}}
                {{--</li>--}}
            </ul>
            <!--<button class="btn btn-sm navbar-btn">Sign up</button>-->
        </div>
    </div>
</nav>
<!-- Navbar End -->


<!-- about us start -->
<section class="section" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="title text-center mb-5">
                    <h1 id="header">@yield('style') Citation Generation</h1>
                </div>
            </div>
        </div>
        <div class="row vertical-content">
            <div class="col-lg-10">
                @section('navbar')
                <nav class="navbar navbar-expand-lg navbar-light mb-3 " id="citation_type" >
                    <div class="logo text-uppercase" >
                        <h5 style="color: black" class="hidden-md hidden-lg">Select Citation Style</h5>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-arrow-down"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar1">
                        <div class="navbar-nav m-auto">
                            <a class="nav-item nav-link {{($style=='apa')?'active' :''}}" href="/apa/{{$source}}" >APA <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link {{($style=='mla')?'active' :''}}" href="/mla/{{$source}}" >MLA</a>
                            <a class="nav-item  nav-link {{($style=='chicago')?'active' :''}}" href="/chicago/{{$source}}" >Chicago</a>
                            <a class="nav-item  nav-link {{($style=='ama')?'active' :''}}" href="/ama/{{$source}}" >AMA</a>
                            <a class="nav-item  nav-link {{($style=='acs')?'active' :''}}" href="/acs/{{$source}}" >ACS</a>
                            <a class="nav-item  nav-link {{($style=='asa')?'active' :''}}" href="/asa/{{$source}}" >ASA</a>
                            <a class="nav-item  nav-link {{($style=='ieee')?'active' :''}}" href="/ieee/{{$source}}" >IEEE</a>
                            <a class="nav-item  nav-link {{($style=='bluebook')?'active' :''}}" href="/bluebook/{{$source}}" >Bluebook</a>
                            <a class="nav-item  nav-link {{($style=='apsa')?'active' :''}}" href="/apsa/{{$source}}" >APSA</a>
                            <a class="nav-item  nav-link {{($style=='harvard')?'active' :''}}" href="/harvard/{{$source}}" >Harvard</a>

                        </div>
                    </div>
                </nav>
                @show
                @yield('citation_source')

                <div class="alert alert-warning" style="display: none" id="alert" role="alert">
                </div>
                <div class=" page p-5" id="page">

                @yield('content')
                </div>

                @section('content_desc')
                        @if ($style === 'apa')
                            <div class="main__content col-md-10 col-md-offset-1 mt-5 mb-5">
                                <!--                    <a href="https://studentshare.net" rel="nofollow">-->
                                <!--                        <img class="main__content_img-banner" src="--><!--/img/banner.jpg" alt="" />-->
                                <!--                    </a>-->

                                <!-- Cite4me Destop -->
                                                 <h1>Generate a Bibliography, In-Text Citations or Other Elements in APA Style!</h1>
                                <p>APA is known as the American Psychological Association. But students all around the world know this abbreviation as a separate academic referencing style. While MLA is the easiest paper format usually met at school level, APA is the most common format applied within the social sciences. It is used to cite different peer-reviewed sources in o0rder to make the research paper or essay sound more persuasive. Quotations are needed throughout the text to serve as the evidence, so APA style reference generator is one of the most valuable free services discovered during the last decade.</p>
                                <p>This citation machine will eliminate all of your problems once and forever. You may choose various sources to help with your academic paper:</p>
                                <ul>
                                    <li>Book or textbook (any written piece found in print, or online as digital e-book. There are two types of this source: fiction and non-fiction. You can watch the titles on websites like Amazon and insert available data in our APA format reference generator to get a proper in-text quote.</li>
                                    <li>Magazine – this source can be print or online as well. It is a known material published periodically. It focuses on the particular topics of interest.</li>
                                    <li>Newspaper – periodical publication (monthly, weekly, or even daily) that includes all recent events, news, shocking articles, and interviews.</li>
                                    <li>Website – an online archive of pages that contains valuable information on specific subject.</li>
                                    <li>Journal (scientific or academic) – a scholarly work also published from time to time. Unlike newspapers or magazine articles, it necessarily involves detailed research and analysis. You may use one of the journals as the sample for your research paper or dissertation.</li>
                                    <li>*Film – documentary, motion picture, TV show, or else. You can cite even YouTube videos, but many students do not know how to do this without APA reference generator. We’ll help!</li>
                                </ul>
                                <h2>Let New APA Style Citation Generator Automatically Format Your Reference Page</h2>
                                <p>If you require an in-depth guidance on this complicated style, there is always an opportunity to purchase the latest edition of Publication Manual of the American Psychological Association. Most probably, you’ll never catch up with all changes as sixth edition has been released so far. The rules are often modified, so it’s impossible to keep them in mind. That is why it is recommended to use free online APA style citation generator for comprehensive information on publishing papers, essays, and articles in the social and behavioral sciences. Different elements of APA style were included in our tool, so you will not miss anything.</p>
                                <p>APA referencing style along with Chicago and Harvard is used for the following types of academic papers:</p>
                                <ul>
                                    <li>Term/research papers</li>
                                    <li>Lab reports</li>
                                    <li>Empirical studies</li>
                                    <li>Scientific journals</li>
                                    <li>Academic articles</li>
                                    <li>Literature reviews/bibliographies</li>
                                    <li>Courseworks</li>
                                    <li>Dissertations</li>
                                    <li>Theoretical papers methodological articles</li>
                                    <li>Case studies.</li>
                                </ul>
                                <p>There are also various sections in APA style paper. Our APA in text citation generator takes care of the most crucial part which is Bibliography. In MLA and Chicago, it is called Work Cited Page. APA usually names it Reference Page or simply References. Anyway, while your teacher or professor may have no interest in abstract or appendices, in-text citations and final bibliography is needed even at high school level when students first meet this style. After mastering APA with the help of this automatic APA format citation generator, student will definitely handle other, more complicated styles used in higher educational institutions only.</p>
                                <h2>Free and Convenient Online APA Reference Generator</h2>
                                <p>Viewing numerous online samples of research papers often is not enough. You cannot cite textbook or article the same way as you cite video. A student can spend restless nights on reading APA Citation Guides, released by the academy. However, as it was mentioned above, these rules may change. We add all the modifications to our system. Thus, you can keep on revising each essay according to the latest (sixth) edition of the APA manual and fix everything in hand, or you can rely on our APA citation generator. You don’t lose anything. Our service was designed to make it possible for each student to save a plenty of time on referencing all sources correctly. It provides the general format for in-text citations and the final, reference page.</p>
                                <p>Keep in mind that formatting every research paper, essay, or dissertation in APA refers to understanding a number of mechanical details:</p>
                                <ol>
                                    <li>Typeface</li>
                                    <li>Line spacing</li>
                                    <li>Margins</li>
                                    <li>Page headings</li>
                                    <li>References</li>
                                </ol>
                                <p>None of the elements possesses such a dramatic influence on your final grade as properly formatted bibliography and in-text quotations. It is important to understand that APA citing is not just another whim of your tutor – it’s something required for the fair treatment of individuals and groups of authors who share their original ideas with masses. You wouldn’t like any of your ideas to be stolen, would you?</p>
                                <p>Besides, APA citation generator free means that our service comes absolutely for free. We care about all students and wish to make it possible for all of them to save a plenty of money. Simply choose one of the source types to begin&nbsp;creating the perfect citation in APA format with the help of this user-friendly website. This powerful referencing style citation generator has helped thousands of students already – become one of them!</p>
                                <!---->                </div>
                        @elseif ($style === 'mla')
                            <div class="main__content col-md-10 col-md-offset-1 mt-5 mb-5">
                                <!--                    <a href="https://studentshare.net" rel="nofollow">-->
                                <!--                        <img class="main__content_img-banner" src="--><!--/img/banner.jpg" alt="" />-->
                                <!--                    </a>-->
                                             <h1>No More Tedious Citing with MLA Format Citation Generator</h1>
                                <p>Composing bibliography is what makes most students frustrated. With a wide array of sources, proper information citation is a challenging and tedious task. But to avoid plagiarism or incorrect data attribution, it is vital to compose bibliography the right way. Hopefully, with technological development, there are lots of tools that can help cite and format all the materials used in your work. Our MLA format citation generator is one of such smart bibliography makers.</p>
                                <p>It can simplify citation process, save your time and energy. Don’t spend hours citing tons of information, our smart MLA citations generator will do everything for you. Just give the detailed description of the sources used in your work and wait for the result. Our bibliography maker identifies all the materials provided including information taken on the Web. Shortly, you’ll get accurate MLA format citation page with all sources appropriately arranged.</p>
                                <p>Forget about sleepless nights composing bibliographic items, formatting reference page and checking everything to make sure there is no source missed. With automatic MLA citation generator creating bibliography page is fast and easy. The tool credits materials taken from various kinds of sources. Be it a book, its republished version or collection of written works you get well-constructed bibliography according to required style guide.</p>
                                <h2>The importance of being earnest or why use citation MLA generator</h2>
                                <p>All educational establishments are strict about originality of any assignment done by a student. Plagiarism issue is still hot and severely punished in academic world. Even if you don’t mean to steal ideas from others’ works but simply copy them or quote, you are plagiarizing. The only thing that can set a clear boundary between copyright violation and legal adoption of someone else’s points is citing sources used in your project.</p>
                                <p>Needles to say, that if you submit work without proper references, you risk earning low grade or even getting a rejection form your tutor. And yet, it’s not only about points, but also about quality and credibility of your paper. After all citing sources shows the scope of work you have covered to come up with unique project and get your message across the audience. Undoubtedly, if you are engaged in research intended for a serious project, citing sources is going to be time-consuming and effort-taking process. This is where citation MLA generator will be of immense help for you.</p>
                                <h2>MLA reference generator – Best choice for in-text citations arrangement</h2>
                                <p>Depending on your major you will reference your work following APA, MLA, Chicago or Turabian style guide. However, most likely that you’ll be using MLA format since it is adopted for many disciplines, predominantly liberal arts and humanities. Research papers in exact sciences and those done in philosophy and history may require other reference style.</p>
                                <p>Here we are going to talk about commonly used MLA style recommended by Modern Language Association. It has a range of formatting features as well as rules for in-text citations arrangement. When you refer to other’s work using this style you have to use the so-called parenthetical citation method. It means that source information is placed in parentheses. Additionally, doing this, you should check whether in-text information corresponds to the source listed on bibliography page. However, in-text citations differ depending on the genre of the source and the number of authors. It’s hard to keep all the details in mind and make sure all reference rules are observed. That’s why automatic MLA reference format generator will help you arrange all citations in the way required by the style guide. Though there are lots of citation nuances from in-text citations, quotations formatting, placing footnotes to the whole format of bibliography page, MLA reference generator can quickly cope with all of them. This smart tool takes essential information such as author’s name, source genre and its publication year and creates list of references according to the rules.</p>
                                <p>Reference generator MLA format is a quick and smart solution for students who have conducted deep research and want to arrange their findings in the right way. This is also a saving tool for learners who lack time to make bibliography but understand the importance of crediting their sources. Whatever the case is, and no matter how little time is left to finish your paper, citation generator MLA format can minimize your efforts and boost odds of getting excellent grade. Don’t risk your academic performance, citing sources is no longer a challenging task.</p>
                                <!---->                </div>
                        @elseif ($style === 'chicago')
                            <div class="main__content col-md-10 col-md-offset-1 mt-5 mb-5">
                                <!--                    <a href="https://studentshare.net" rel="nofollow">-->
                                <!--                        <img class="main__content_img-banner" src="--><!--/img/banner.jpg" alt="" />-->
                                <!--                    </a>-->
                                           <h1>What for Chicago Style Citation Generator Is Needed?</h1>
                                <p>A good academic writing implies the usage of quotations. However, the words of other people are treated as plagiarism in case they are not properly cited. It is a real obstacle for many modern students to include in-text citations and bibliography in the way it should be. Besides, there are so many paper formats that one may get lost:</p>
                                <ul>
                                    <li>APA</li>
                                    <li>MLA</li>
                                    <li>Chicago</li>
                                </ul>
                                <p>So, due t the fact using the ideas and thoughts of others without providing a due credit is considered plagiarism. A research paper or any other academic assignment should be written from scratch. In other words, the plagiarism checker should show that your essay is almost 100% original. Thus, academic market players realized the need of creating a convenient website where one can easily get correct bibliography for any type of work. Our innovation deals with all possible styles, but this time we wish to focus on Chicago referencing style as it is much more complicated than MLA or APA.</p>
                                <h2>Manage Your Bibliography Using Citation Generator Chicago</h2>
                                <p>In fact, students have to obey a number of different rules when writing in a particular style. For instance, they should mind margins, paragraphs, intervals, font, its size, and more. however, when it comes to referencing, students share that this is the worst nightmare.</p>
                                <p>Since this Chicago citation generator makes it simple to come up with citations (both in-text and references), there is no excuse to copy-paste any more. Every student or writer can design excellent bibliographies and acknowledge other people’s work with no problems now! &nbsp;You may completely rely on our brand new Chicago style citation generator as it was introduced by professors from the world’s leading universities and advanced IT team.</p>
                                <p>Another reason to cite the ideas of other people with the help of accurate citation generator Chicago is rather ethical. Authors and artists should be awarded with credits from their readers or listeners. After all, the material you use for your paper enriches your knowledge. Besides, by setting up provenance students ensures his or her own work. The teacher will see how good a student is at conducting research and analyzing literature. Including works cited means selecting only the most critical and valuable thoughts from the obtained sources, so it’s not that easy. Only students with perfect research and analytical skills can do that. Selecting the quotes is not enough anyway. That is where our Chicago reference generator steps in.</p>
                                <p>Finally, in-text citations make it possible for the interested audience to delve deeper in the particular topic. It is your way to catch an eye of the reader. As far as good bibliography may encourage tutor to read your paper up to the end, it may impact your grade. If you want to have a positive impact, use this comfortable and user-friendly Chicago style reference generator.</p>
                                <h2>How This Chicago Reference Generator Works?</h2>
                                <p>You may wonder how the system works. You don’t need to type in anything manually – that’s the good news. There is also no need to read full and boring MLA or Chicago manual of style citation generator. Every nuance is already implemented in our system. It works like professional cleaning software for your computer: you simply go online and get what you want.</p>
                                <p>On the whole, the steps are really easy.</p>
                                <ol>
                                    <li>Pick academic writing style (paper format) and search. When you conduct scientific research for your assigned paper, you meet hundreds or even thousands of books, journals, articles, videos, websites, or else. Different sources have to be cited in a different way. The absence of universal rules turns the process even more complicated. Unless your teacher provides you with the full list of literature to be used in a bibliographical format, you must solve this issue all alone. Or, you can go to our cite4me.org and receive an automatic Chicago manual style citation generator. It is very useful in case you don’t want to order entire essays from corresponding services, but you still lack the knowledge of referencing styles.</li>
                                    <li>Next, add the source you have chosen easily and go on. Add the selected source to references and don’t stop citing to carry out a complete list (a.k.a. reference page). Please check how many sources your tutor expects to see. Our automatic bibliography maker auto-fills. Keep it in mind when simply inserting the link to your book/movie/article.</li>
                                    <li>Simply download the prepared bibliography. You can have your bibliography in either the APA, MLA, Chicago styles.</li>
                                    <li>What is more important, unlike various essay writing and editing services, our website charges nothing. Every student can enjoy free Chicago citation generator. No need to worry about your cash any longer. All we want in return is your high grade. After using our system, students are able to cite whatever they want in any format. Moreover, they can come up with own Chicago manual style citation generator.</li>
                                </ol>
                                <p>Don’t be an intellectual property stiller —save your reputation, use Cite4Me.Org and reward those who deserve credit for it.</p>
                                <!---->                </div>
                        @elseif ($style === 'ama')
                            <div class="main__content col-md-10 col-md-offset-1 mb-5 mt-5">
                                <!--                    <a href="https://studentshare.net" rel="nofollow">-->
                                <!--                        <img class="main__content_img-banner" src="--><!--/img/banner.jpg" alt="" />-->
                                <!--                    </a>-->
                                        <h1>AMA Format Citation Generator as an Irreplaceable Helper</h1>
                                <p>The AMA citation maker is an awesome helping hand for any student.No matter how good you are at your field of study there will be a final disappointing point. It concerns a list of reference. The most boring part exhausts students’ minds and imbue them with the fear of encountering this challenge one more time.</p>
                                <p>Those guys who have facedit realize that their grade is dependent on the way they’ve done their list of reference. That is why teachers pay a special attention to it as it’s a sore spot of many students.It’s high time you learned all peculiarities about AMA referencing style. In fact, there is nothing complicated and time-consuming about it unless you do it by hand and lost in a search for a necessary citation.Free AMA citation generator is incomparable help that makes your grades higher! Read the following guideline to get most out of it.</p>
                                <h2>AMA Referencing Style</h2>
                                <p>First of all, you need to gather all your research material. Start doing it at once. You will refer to loads of books and websites. It’s impossible to remember all of them. You can use a pen and paper method or you can apply a modern one – take a photo of materials you are using. Your smartphone or tablet must be accompanying you wherever you go. Take advantage of them: make screenshots.</p>
                                <p>Follow the second piece of advice once you have done your research.Look through AMA (American Medical Association) definition. It is a system of citations allowing you to underpin your paperwith findings of multiple authors who had conducted the research on related topics earlier.</p>
                                <p>The system was elaborated by the American Medical Association in order to use it in their field of study. However, the sphere of its use is by far wider now. Consequently, it has certain modifications depending on a branch of science. AMA referencing consists ofcitations and references. Original citations are placed in text and references to them are situated at the end of the whole research, in the reference list. The both elements are linked with a number. It defines their order in the list.</p>
                                <h2>AMA in-Text Citation Generator</h2>
                                <p>The citation tool you are going to use is easy to deal with. All you need to do is to mention a number above a citation. Then, use the same number for a source where the quote was taken from in the list of reference. Mind the way superscript is written as not to commit common mistakes. AMA in-text citation generator will make your citation look in the following way:</p>
                                <ul>
                                    <li>It was done to implement drastic changes¹</li>
                                    <li>The actions led to suppression of the nation that is why the President had to leave ²˒³־¹˒⁴</li>
                                </ul>
                                <p>It must be done in a chronological order as not to make a mess. Parenthetical citation is done accordingly. Thus, it guarantees the uniqueness of your paper and reduce the risk of plagiarism. Assumptions, thoughts and conclusions of other authors are a legacy you can only refer to. That is why AMA format citation generator will help your teacher to find necessary entries and check the correspondence between a citation and a reference.</p>
                                <h2>AMA 10<sup>th</sup> Edition Examples</h2>
                                <p>All theoretical material should be followed by examples. We hope it will help you create AMA citation in a right way.</p>
                                <p>The first example concerns book-single author relation:<br>
                                    The last name and initials of the first name of an author. The title of a book. The number of an edition (3<sup>rd</sup> edition). City, state or country of a publisher, the name of the publisher and a copyright year.<br>
                                    <em>Stevenson P. The history of the Northern Countries. 10<sup>th</sup> ed. Washington, DC: Dickson &amp; Pitt; 2017</em><em>.</em></p>
                                <p>Look at AMA 10<sup>th</sup> edition examples of book – several authors relation:<br>
                                    First author, the second author, the third author (use “et al” after the third name if there are six authors, for instance). The title of a book. The number of an edition. City, state or country of a publisher, the name of the publisher and a copyright year.<br>
                                    <em>Atkinson A, Smith J. The discoveries of the Medieval Ages. 2<sup>nd</sup> ed. New Mexico: the USA; 2016. </em></p>
                                <h2>A Guide on How to Cite AMA Format</h2>
                                <p>The information mentioned above is your step-by-step guideline to succeed in automatic AMA citation:</p>
                                <ul>
                                    <li>you need to store all materials you are using for your paper (do it in any way you like);</li>
                                    <li>make notes as not to forget where a citation was taken from;</li>
                                    <li>create your list of reference in an alphabetical order;</li>
                                    <li>use superscripts in a chronological way;</li>
                                    <li>remember how superscripts should be typed;</li>
                                    <li>follow the given examples to mention the name of an author, the number of edition etc.;</li>
                                    <li>use AMA citation online to save your time but bear in mind the pieces of advice given to you.</li>
                                </ul>
                                <p>Any citation builder you choose will turn your reference list ordeal into an easy-to-accomplish matter.Do it properly and you won’t face the music with your teacher for a poor list of reference. Make it immaculate and your find-faulting instructor will grade your paper excellently!</p>
                                <!---->                </div>
                        @elseif ($style === 'acs')
                            <div class="main__content col-md-10 col-md-offset-1 mb-5 mt-5">
                                <!--                    <a href="https://studentshare.net" rel="nofollow">-->
                                <!--                        <img class="main__content_img-banner" src="--><!--/img/banner.jpg" alt="" />-->
                                <!--                    </a>-->
                                                <h1>Create Perfect Citations with Our ACS Format Citation Generator</h1>
                                <p>Formatting according to the norms of a selected style is an important stage of writing any scientific paper. Even though the research and writing part is over, a lot of time has to be allocated on arranging and referencing the sources you have used adhering to the norms of the latest edition of the appropriate style guide. And when the number of sources exceeds fifty, it becomes a really time and labor-consuming task.</p>
                                <p>That’s why we have created a citation builder that you can use to significantly optimize the process. Even though the builder is designed for all styles and source types, we’d like to tell you more about the ACS citation maker specifically.</p>
                                <h2>What is the ACS referencing style?</h2>
                                <p>The ACS referencing style is a combination of norms applied to formatting and referencing research papers in the field of Chemistry. It was created by ACS (American Chemical Society) and last updated in 2006 (3<sup>rd</sup> edition, available online).</p>
                                <p>The style offers a wide range of norms on abbreviations of the names of scientific journals, the use of grammar and punctuation, as well as a number of other requirements.</p>
                                <p>The ACS format citation generator available at this website is based on the latest edition of the style guide. However, as soon as the new edition is published, it will be updated automatically.</p>
                                <h2>A guide on how to cite ACS format</h2>
                                <p>The ACS style provides comprehensive norms concerning formatting, abbreviations, italicizing names and citing the sources used. Since our free ACS citation generator is designed specifically to create citations, we will only focus on this part of the style.</p>
                                <p>ACS style distinguishes two types of citations:</p>
                                <ul>
                                    <li>In-text</li>
                                    <li>Full text citations at the end of your paper (reference list)</li>
                                </ul>
                                <p>In-text citations can be provided in one of the following ways:</p>
                                <ol>
                                    <li>The number of the source specified at the end of the citation or after the author’s name in italics and in parentheses</li>
                                    <li>The number of the source specified at the end of the citation or after the author’s name in the superscript format</li>
                                    <li>The author’s name and the date of publication specified in parentheses</li>
                                </ol>
                                <p>Reference list citations differ depending on the kind of source you are citing – whether it is a book, an article, or a website. A lot depends on whether it is a published or an online source that you are citing. That’s why, before generating an ACS citation online, we ask you to specify whether a source is an online or an offline one.</p>
                                <p>See below for ACS citation examples.</p>
                                <h2>ACS citation examples</h2>
                                <ol>
                                    <li>In-text citations:<br>
                                        Chemistry is the mother of all sciences. <em>(1)<br>
                                        </em>Smith <em>(1)</em> states that Chemistry is the mother of all sciences.<br>
                                        Without Chemistry, there would be no Physics.<sup>1<br>
                                        </sup>Smith<sup>1</sup> states that without Chemistry, there would be no Physics.<br>
                                        The biggest danger for a researcher is to adjust the facts to fit the hypothesis. (Smith, 2011)<br>
                                        Smith (2011) states that the biggest danger for a researcher is to adjust the facts to fit the hypothesis.</li>
                                    <li>Reference list citations:<br>
                                        Citing a published book:<br>
                                        Jameson, P.; Ginger, J. Latest Chemistry Solutions; Joseph Henry Press: New York, 2016; pp 12-13<br>
                                        Citing works presented at conferences:<br>
                                        Jacombo, E.; Kasy, P. The Properties of Surfaces, Proceedings of the European Conference, Paris, France, Jan 15–29, 1995; Searcy, A., Stashowski, G., Eds.; Elsevier: Paris, 1995<br>
                                        Citing a thesis:<br>
                                        Mackerel, H. The Properties of Silicon Surfaces. Ph.D. Thesis, Plymouth University, March 1999<br>
                                        Citing online periodicals:<br>
                                        Norbert J. Pienta*. Celebrating Excellence: A Lesson From the 2011 Oscars. J. Chem. Educ. [Online] 2011, <em>88</em>&nbsp;(5), http://pubs.acs.org/doi/abs/10.1021/ed200159m (accessed Mar 19, 2011).</li>
                                </ol>
                                <h2>How to use our ACS in text citation generator</h2>
                                <p>To create ACS citation using our tool, you only need to do the following:</p>
                                <ol>
                                    <li>Choose if it’s an online or a printed source</li>
                                    <li>For printed sources: specify the author’s name and surname (click on “Add Author” for multiple authors), book title, year of publication, place of publication, publisher, and the edition of the book.</li>
                                    <li>For online sources: specify the author’s name and surname, webpage title, date of publishing, date of accessing the source, URL and the website name.</li>
                                    <li>Click “Create Reference” and voila – you have a perfect citation!</li>
                                </ol>
                                <p>Please note that our citation tool is appropriate for all kinds of citation. This includes reference list and parenthetical citation (within the text).</p>
                                <h2>The benefits of automatic ACS citation are obvious!</h2>
                                <ul>
                                    <li>Save a significant amount of time by not reading the entire style guide.</li>
                                    <li>Have perfect citations created without any mistakes that can reduce your grade</li>
                                    <li>Don’t pay a cent – our ACS in text citation generator is absolutely free!</li>
                                    <li>Check if your citations are correct by comparing them to the ones generated by our tool</li>
                                </ul>
                                <p>Get citing now!</p>
                                <!---->                </div>
                        @elseif ($style === 'asa')
                            <div class="main__content col-md-10 col-md-offset-1 mt-5 mb-5">
                                <!--                    <a href="https://studentshare.net" rel="nofollow">-->
                                <!--                        <img class="main__content_img-banner" src="--><!--/img/banner.jpg" alt="" />-->
                                <!--                    </a>-->
                                             <h1>Do You Need an ASA Format Citation Generator? We Have One for You!</h1>
                                <p>Welcome to Cite4Me.org, a website every student will find incredibly helpful. Correct referencing is not just your professor’s whimsy. It’s a kind of common decencies for academic writing. When you use ideas of other authors for your own paper, you should give credit to them. Otherwise, you can be blamed in plagiarism. You should be attentive when quoting sources in your work. Some teachers request a certain referencing style when assigning a paper to you, the others – don’t. So you should know which format to us. For instance, ASA (American Sociological Association) is a referencing style used for research papers, article reviews, and other works in Sociology and other related sciences.</p>
                                <p>So why should you use our ASA format citation generator?</p>
                                <ul>
                                    <li>Quotations from reliable sources make your own thoughts sound persuasive;</li>
                                    <li>Your paper will be more scholarly when you format your quotes in a correct way;</li>
                                    <li>Your audience will have an idea about the sources you have used and may find them and review if they are interested in a topic;</li>
                                    <li>Your teacher will see how deeply you understand the topic by referencing and explaining the ideas of other authors.</li>
                                </ul>
                                <p>In a word, some papers, especially in Sociology, cannot avoid quoting other sources. If you don’t have time and interest to study millions of guidelines – use our free ASA citation generator and manage your quotations fast and easily!</p>
                                <p>Every particular type of academic sources, be it a book, newspaper, ebook, scientific journal, or website, has its own referencing specifications. And it may become a big deal of work. As you know, some professors are really picky when it comes to formatting and referencing… But you don’t really want some small comma or dash to spoil your mark, do you? If so, then benefit from our citation builder and you won’t have to worry about correct referencing anymore.</p>
                                <h2>What is ASA referencing style?</h2>
                                <p>As we have already mentioned, ASA referencing style is used widely by publishers, researchers, and students who write papers and articles in Sociology. This is a parenthetical citation style that uses the “author-date” system of referencing. Sociologists find this format convenient and attractive, since it doesn’t require any annoying footnotes, which makes ASA an efficient and pretty simple format. It consists of the following elements:</p>
                                <ul>
                                    <li>In-text citations<br>
                                        They are located near the source and present author’s name and year of publication;</li>
                                </ul>
                                <ul>
                                    <li>References<br>
                                        This is a section located at the end of your work. This page lists the sources you have used for a paper and provides extended publication information;</li>
                                </ul>
                                <p>Here you can create ASA citation online, whether you need an in-text one or a reference page. In-text citations are used to show where exactly you have used the words of some other author. They are inserted in the text right after the direct quotation or a paraphrased one. Usually, these citations are put in brackets and include the author’s surname, year of publication, and sometimes pages, for instance: (Luckmann, 1966). When you have a book written by multiple authors, you should include their surnames in the brackets.</p>
                                <p>These citations should be linked to your reference list and direct your audience there. With the help of our ASA citation maker, you can create fully-formatted reference list as well as in-text citations, which will provide your audience with an accurate information needed to find the original source.</p>
                                <h2>ASA 5th edition examples: A guide on how to cite ASA format</h2>
                                <p>Do you need ASA 5th edition examples for better understanding of this style? We have gathered some for you!</p>
                                <ul>
                                    <li>In-text citation:<br>
                                        “When Luckmann (1966) studied…” or “Citation text (Luckmann, 1966)…”</li>
                                </ul>
                                <ul>
                                    <li>Reference page:<br>
                                        Books: Author’s last name, author’s name. Year of publication. Book Title Italicized and in Title Caps. Publishing City: Publisher.<br>
                                        Journals: Author’s last name, author’s name. Year of publication. “Article title in Quotes and Title Caps”. Journal Title Italicized Volume Number: page numbers.<br>
                                        Newspaper of magazine: Author’s last name, author’s name. “Article title in Quotes and Title Caps,” Magazine/newspaper Title, Date of publication, pages.</li>
                                </ul>
                                <p>You can create any ASA citation using the generator available at our website! Try and see how simple its is!</p>
                                <h2>Cite4Me ASA in text citation generator</h2>
                                <p>Cite4Me provides you with ASA in text citation generator because we are committed to helping students get better grades and improve their citing skills. This website has been created to support everyone who needs help in correct usage of this referencing style for essays, articles, research papers, or dissertations. We have created a clear and easy to use tool that help you create in-text citation as well as reference lists. In a word, this citation tool will ensure that you format your paper correctly and save your precious time.</p>
                                <p>We encourage you to use our automatic ASA citation tool for simple, smart, and quick referencing!</p>
                                <!---->                </div>
                        @elseif ($style === 'ieee')
                            <div class="main__content col-md-10 col-md-offset-1 mb-5 mt-5">
                                <!--                    <a href="https://studentshare.net" rel="nofollow">-->
                                <!--                        <img class="main__content_img-banner" src="--><!--/img/banner.jpg" alt="" />-->
                                <!--                    </a>-->
                                             <h1>IEEE Format Citation Generator Used to Create Excellent Essays</h1>
                                <p>Why do we have to cite sources that we use during the process of writing an essay or research paper? Right, to let the reader know where he can get more information. Essays are usually limited by the number of words, so students should be able to pick only the most important data out of all. Besides, it is against the law to use the materials reserved by other authors without referencing them properly. Plagiarized papers usually fail. That is why it may be so difficult to create IEEE citation on your own.</p>
                                <p>Most of the students have heard about different referencing styles like MLA or Turabian. What about IEEE? This is another citation style which is not as popular among both teachers and students. The IEEE referencing style is not something you should be afraid of. It has its own rules and convenient writing guides that can help every student. An advanced knowledge of PC is not required to find the necessary information on the web. Along with the corresponding guide, students are encouraged to learn more about other existing referencing styles:</p>
                                <ol>
                                    <li>MLA</li>
                                    <li>APA</li>
                                    <li>Turabian</li>
                                    <li>Harvard</li>
                                    <li>Oxford</li>
                                    <li>Vancouver</li>
                                </ol>
                                <h2>IEEE in-Text Citation Generator – The Way to Cite Paper for Free</h2>
                                <p>Another question is whether you’re looking for the way to cite the paper on your own or do it with the help of online IEEE citation maker. Not so long ago, there were no such things as essay writing services or citation generators. Today, the progress allows online generators and writing agencies to appear to lend you a helping hand.</p>
                                <p>To begin your journey, you should know what the abbreviation stands for no matter if you use some help or do everything on your own. Well, IEEE means the Institute of Electrical and Electronics Engineers style. You can make a conclusion that this style is usually requested by the IT or Engineering institutions. There are some differences between this format and other well-known school and college formats.</p>
                                <h2>Specifics of IEEE Referencing Style</h2>
                                <p>An IEEE format citation generator can assist you in finding the way to the correctly structured paper. Everyone knows the general structure of the essay:</p>
                                <ol>
                                    <li>Introduction</li>
                                    <li>Body</li>
                                    <li>Conclusion</li>
                                    <li>Bibliography</li>
                                </ol>
                                <p>The last part is where your chosen citation style is especially crucial. Also, the way you format the essay can be seen in the footnotes and text citations. You can find a lot of IEEE citation examples at our website if you have any doubts. Sometimes, samples might assist in your writing process, but they are not enough to get the highest grade. Students need to have an overall understanding of the given style as well. Various online tools and experts can develop this understanding for free or for the fair price.</p>
                                <p>If you’re a student of computer class or engineering and construction faculty, you should definitely face this challenge. Sometimes, it may be harder to cite essay properly than the answer to the main question or cover the topic in full. That is when a need for automatic IEEE citation appears.</p>
                                <p>As we have discussed, building a bibliography using IEEE is something very different from creating a regular MLA essay. Even if you prefer to have IEEE citation online, you still need to know the basic features of this style:</p>
                                <ol>
                                    <li>The author’s name comes before his or her last name</li>
                                    <li>The title of the chosen article is always put in quotation marks (however, parenthetical citation may also be needed)</li>
                                    <li>The title of the textbook or scientific/academic journal has to be italicized</li>
                                    <li>Nothing should be bolded.</li>
                                </ol>
                                <p>These four rules are the basics of the given format.</p>
                                <h2>Where to Look for IEEE Citation Examples</h2>
                                <p>It takes several hours to read a writing style guide in full. Together with the attached examples, you may spend a day on studying the rules of proper formatting instead of focusing on the assignment itself. Sometimes, a citation builder is the only way out. The robots do a lot of things no worse than people today. So, why don’t you trust your academic issues to the smart machine?</p>
                                <p>Being a logical addition to Chicago citing format, IEEE has a lot of common features. It is just a bit more complex and less known among the students. Once again, this sort of style is widely used in essays related to information technologies and technical disciplines like engineering. You won’t need IEEE in text citation generator for your high school English literature class or biology lectures in college. However, computer science students should be aware!</p>
                                <h2>Learn Where to Get a Guide on How to Cite IEEE Format</h2>
                                <p>Citing multiple authors is the most difficult part. You should stick to the alphabetical order instead of the chronological order. When dealing with several authors and sources, online constructors can conduct mistakes. Thus, it is better to have their work checked by the live professionals from our writing team. The editing department will solve this problem ASAP.</p>
                                <p>When we speak about services like free IEEE citation generator, you should consider the opportunity of buying advanced online help. Paid products are usually better by their characteristics. We mean that live authors from our website can solve any problems with your essay much faster than any citation tool free of charge. At the same time, we have established such option for our customers as well. You can use it and compare to the results produced by the professional writer. When you’re in a hurry, automatic machines really help. We advise you to try one or turn to professional writers online.</p>
                                <!---->                </div>
                        @elseif ($style === 'bluebook')
                            <div class="main__content col-md-10 col-md-offset-1 mb-5 mt-5">
                                <!--                    <a href="https://studentshare.net" rel="nofollow">-->
                                <!--                        <img class="main__content_img-banner" src="--><!--/img/banner.jpg" alt="" />-->
                                <!--                    </a>-->
                                                 <h1>Bluebook Legal Citation Generator When You’re in a Hurry</h1>
                                <p>The first question to be answered before we move to the main idea of this article is “Who needs a Bluebook paper format?” We all have heard about MLA, APA, and other writing styles so far, but many students share that they have no idea what Bluebook is. We will first explain what this style is about before discussing our machine created to generate Bluebook citation online automatically.</p>
                                <p>So, if you have a law case study, essay, or research paper with an impending deadline, the best thing you can do to catch up with your peers and satisfy your teacher’s requirements is to use our company’s latest innovation – a free Bluebook law review citation generator.</p>
                                <p>This machine was developed especially for the law and political science students who are running out of time and nerves when searching for the corresponding manuals online. Without any need to read the complete guide, you can learn when to apply this legal citation style, how to format your paper properly, and where to get samples of essays done in Bluebook referencing style. Ready to start?</p>
                                <h2>Bluebook Referencing Style Definition and Peculiarities</h2>
                                <p>The first thing you should remember is the definition of the given referencing style. It is a uniform referencing style which is most frequently applied to the legal system for law professionals in the USA and sometimes the United Kingdom. It is established by the Harvard Law Review Association, the University of Pennsylvania Law Review, and the Yale Law Journal.</p>
                                <p>The entire generations of students who study legal/political disciplines as well as lawyers, scholars, advocates, and other related experts have counted on this convenient legal citation tool to create citations in their written pieces.</p>
                                <p>The basic features of the format which make it so different from the rest of the writing styles are:</p>
                                <ol>
                                    <li>Full author’s name is included</li>
                                    <li>Legal act is usually named instead of the whole book or article</li>
                                    <li>Publisher and date of publishing are added</li>
                                </ol>
                                <p>To make it easier, you should have a look at the Bluebook 20th edition examples like this one:<br>
                                    Sobieski v. Cook, 556 S.W.2d 701 (Tenn. 1999).</p>
                                <p>This one is filed but not decided. If you are a law student, you’ll get what I mean. If there are multiple authors, the citation will look a bit more complex.</p>
                                <h2>Where to Search for Bluebook 20th Edition Examples?</h2>
                                <p>You can find a plenty of Bluebook samples in the Law Review/Journal. Such citations can also be met in the:</p>
                                <ul>
                                    <li>specific articles</li>
                                    <li>case studies</li>
                                    <li>essays</li>
                                    <li>research papers</li>
                                    <li>law dissertations</li>
                                    <li>legal acts</li>
                                    <li>reports</li>
                                    <li>presentation (in case you have to present a legal speech)</li>
                                    <li>statutes</li>
                                    <li>regulations</li>
                                </ul>
                                <p>Bluebook references or footnotes can be less complete. It means that you don’t have to insert full source’s information. It is especially useful when it’s too long. The short form of the reference must still clearly define the source you were working with. Less complete citations can be used whenever the target audience will consider it simple to return to the complete citation. Thus, in many situations, you might need our Bluebook legal citation generator to come up with the full quotations.</p>
                                <p>You can see the examples of full and brief citations below respectively:<br>
                                    <em>Brown v. Helvering</em>, 291 U.S. 193, 203 (1934).<br>
                                    <em>Brown</em>, 291 U.S. at 203.</p>
                                <p>Hopefully, you can see the difference. A comfortable citation builder can come up with both types of citations for your paper.</p>
                                <h2>A Guide on How to Cite Bluebook Format – Summary</h2>
                                <p>Many sources should be cited with the help of the discussed paper format. Even if you don’t plan to connect your further life and career with the legal field, it would be useful to study the basics. The better option is to apply Bluebook in text citation generator to the legal documents when you have to work with them. After all, average citizens often have to sign various documents, but sometimes they have to compose them on their own as well.</p>
                                <p>The Bluebook supports many various sources like legal cases as well as Supreme Court statutes. To create Bluebook case citation, a young professional has to be really tough in this question. Lawyers earn big money, so their employers expect the same high level of preparation from them. The way in which quotations are formatted is influenced by the type of source the author is using.</p>
                                <h2>How &nbsp;the Bluebook In-text Citation Generator Works</h2>
                                <p>If you insert the required source in the Bluebook citation maker at our website, you’ll receive a short or full version depending on your wish. As far as different types of sources require different citation methods, you should specify this parameter as well. If you want to cite a case study, for instance, the machine has to know its title, sources where it can be discovered, parenthetical citation which involves a court and jurisdiction, the date of decision, and, finally, the subsequent history of case</p>
                                <p>If you are thinking about the easiest option, you should pay attention to our company’s automatic Bluebook citation. It can generate your references within seconds. Quick, accurate, and hassle-free, it’s about making the life of students and professionals simpler!</p>
                                <!---->                </div>
                        @elseif ($style === 'apsa')
                            <div class="main__content col-md-10 col-md-offset-1 mb-5 mt-5">
                                <!--                    <a href="https://studentshare.net" rel="nofollow">-->
                                <!--                        <img class="main__content_img-banner" src="--><!--/img/banner.jpg" alt="" />-->
                                <!--                    </a>-->
                                                  <h1>APSA Format Citation Generator</h1>
                                <p>Many students always try to cope with a list of reference by themselves. However, manual work lacks perfection. There will be always minor mistakes and citations which doesn’t correspond to APSA referencing style. Those students who prepare perfect bibliographies are not such wise guys as you might think. Their secret lies in free APSA citation generator. It is an automatic APSA citation machine which will quickly turn the information into a full reference. It takes minutes to write the bibliography according to the requirements. Try it out! It will save much time and nerves. Guys are ready to tear their hair out when a list of reference should be placed on 15 pages. APSA format citation generator does it at a breakneck speed. All you need to do is to copy and paste the ready made bibliography.</p>
                                <h2>APSA in-Text Citation Generator</h2>
                                <p>APSA (American Political Science Association) is one of the most widely used referencing styles. Multiple authors use it to present their scientific researches. The style is quite simple in creating a list of reference accordingly. Moreover, it is piece of cake if you are using APSA in-text citation generator.&nbsp; Here, we are going to teach you how to apply APSA citation maker.</p>
                                <h2>APSA Citation Examples</h2>
                                <p>The best way for you to understand how the machine works is to produce an example. Examine the following situation. You need to create APSA citation from an electronic encyclopedia, Wikipedia, for instance. Firstly, find APSA citation tool and choose encyclopedia entry among the suggested options. Afterwards, insert the URL of your entry and push the button to see what happens next. The entry we have taken to provide you with an example is about the war of White and Red Roses. This is what we have got:</p>
                                <p>Title of Entry: Wars of the roses<br>
                                    Date Published: 16.02.2017<br>
                                    Name of Encyclopedia: Wikipedia<br>
                                    URL: https://en.wikipedia.org/wiki/Wars_of_the_Roses<br>
                                    Publisher: Wikimedia Foundation<br>
                                    Date Accessed/Viewed: 17.02.2017</p>
                                <p>The APSA in-text citation looks like that: (Wars of the roses, 2017) and the full reference:<br>
                                    <em>Wars of the roses</em> (2017) in <em>Wikipedia</em>. Available at: https://en.wikipedia.org/wiki/Wars_of_the_Roses (Accessed: 17 February 2017).</p>
                                <p>This is how your citation should be done if you need to APSA reference an encyclopedia entry.&nbsp; Did you notice any peculiarity about it? The thing is the citation is placed in brackets. All your in-text citations correlate with the full references and can be easily found by the first in-text citation word which is the same in the bibliography.</p>
                                <p>Beneath, you can find out how to deal with the material of concrete authors. The reader can search for any reference by the scientist’s name in the list which is alphabetically done.</p>
                                <h2>A Guide on How to Cite APSA Format</h2>
                                <p>Let’s take one more example with an author’s name. For instance, you are writing a term paper on a socio-political topic and you need to insert a name of a scholar. You can start in the following way: <em>Conducted research (Brown 2016) on this matter proves… OR In 2016, Brown declared that…. OR Brown (2016, 297) made it clear that….</em></p>
                                <p>Now, you need to mention his scientific work in your bibliography. The above-mentioned citation builder is at your service! Apply the same algorithm of actions to get a ready-made reference:<br>
                                    Brown, J. (2016) <em>How to Save People from Revolutions</em>. 2nd edn. New York: Thomson Coorp.</p>
                                <h2>APSA Citation Style</h2>
                                <p>We didn’t want to exhaust you with a boring theoretical material. However, it might clear your vision of APSA citation style. As you have already noticed there are two or three compulsorily elements of an APSA citation. They contain the author’s name, the year of publication and the page number. Your citation is taken in brackets. However, it doesn’t if the author’s name is used as the part of sentence. You have been produced the example for this particular APSA rule above. Mind a type of the source you are dealing with. You have examined the two APSA citation examples in the article. The first source was the encyclopedia entry and the second one was the book. They do look different.</p>
                                <h2>APSA Referencing is Easy</h2>
                                <p>The free APSA citation online machine produces speckles bibliography. Simply use it if you hesitate where to mention a number of edition. It has all answers to referencing questions. Each parenthetical citation will be underpinned with a correctly written reference. That is the way to an excellent grade for your term paper. There are a lot of manuals on APSA topic. We have prevented you from crazy flipping through pages to find a necessary chapter. The presented info is a concise compilation of materials in simple words you will definitely need.</p>
                                <!---->                </div>
                        @elseif ($style === 'harvard')
                            <div class="main__content col-md-10 col-md-offset-1 mb-5 mt-5">
                                <!--                    <a href="https://studentshare.net" rel="nofollow">-->
                                <!--                        <img class="main__content_img-banner" src="--><!--/img/banner.jpg" alt="" />-->
                                <!--                    </a>-->
                                                <h1>Harvard citation generator: Get automated help with your references</h1>
                                <p>Do you know what plagiarism is? Well, it is using the ideas of other people, without citing or acknowledging their roles in the production of such kind of work. Providing an accurate citation is one of the most effective ways of avoiding plagiarism. Using the Harvard citation generator is one of the most effective ways and methods of avoiding plagiarism. This is an automated system that allows you to generate citations for your paper. Note that, the Harvard reference style is not difficult to master.</p>
                                <p>It is one of the simplest styles of references that you can use to write your paper. Nonetheless, to save time, you can always rely on an auto citation Harvard reference system. The results of using such kind of a system are instant, and all that is required is for you to provide the name of your resources or materials that you want to use for the purpose of referencing your paper using Harvard citation style. On this basis, our Harvard online citation generation system will help you with your citations. The Harvard citation machine that we use is reliable and accurate. At no given time will these machines produce citations that are not correct. Furthermore, our citation generators are constantly updated for purposes of ensuring that they produce Harvard reference and citations that are up to date.</p>
                                <p>Note that, there are a number of other styles of referencing that can be used to reference your paper. Another style is APA. Most universities that are using the American system of education prefer to use the APA for purposes of referencing their papers. Other popular styles are MLA, Oxford, and Chicago. Nonetheless, if you are stuck with your paper, and are unable to format it using the mentioned styles, you can ask for professional assistance from us. We are available 24/7, and ready to help you.</p>
                                <p>Moreover, the following are the steps you should not ignore when writing your paper. If you follow these steps, you will definitely avoid the submission of plagiarized work. The following are the steps:</p>
                                <ul>
                                    <li>Understanding of questions: You must first understand the question that is being asked, and come up with an approach that you want to use in answering it. This process also involves formulating a unique and original thesis.</li>
                                    <li>Data collection: Begin the process of collecting data. Ensure that the materials you use are relevant and will help you prove your thesis.</li>
                                    <li>Analysis: Analyze the data collected. This will include picking up the relevant information that will help to prove your thesis. This is an important step, because any information that you use from the sources must be referenced. When using Harvard reference style, ensure that all the materials and sources used for your paper are properly referenced at the end of your paper.</li>
                                </ul>
                                <p>When you follow these strategies, chances of you coming up with a unique and non-plagiarized paper are high. This is because you will be writing your paper from scratch, and any borrowed work will be well cited. You can always seek professional assistance when you are not able to write your papers from scratch.</p>
                                <h2>Harvard reference generator: Get automated Harvard citation and improve the quality of your paper</h2>
                                <p>Well, if you want to benefit from our Harvard reference generator, you can ask us to write your paper for you. Our generator has the capability of providing accurate Harvard citation; thus, you will not need to write the citations manually. One of the benefits you will enjoy once you get a paper from us is that your paper will be revised for free. We do not tolerate low quality work; hence, you have a right to request a write to revise your work, in case the solution provided is wrong.</p>
                                <p>Additionally, we have a refund policy. You have a right to ask us to refund back your money if the solution of your paper is wrong. It is advisable to request a refund if the revised paper is not satisfactorily done. Furthermore, our services are available 24/7. You can request a writer to write your paper at any time. In fact, if you have an urgent order, do not hesitate to bring it to us. We can write a paper that has a very short deadline and deliver it on time. We, therefore, encourage you to order an essay writing service from us, and we shall never disappoint you.</p>
                                <!---->                </div>
                        @else

                        @endif

                    @show
            </div>



        </div>

    </div>
</section>
<!-- about us end -->



<!-- contact end -->

<!-- footer start -->
<footer class="footer-light bg-light">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-9">
                <div class="row justify-content-center">
                    <div class="title text-center mb-5">

                        <img src="/images/logo.png" alt="" class="img-fluid mx-auto d-block mb-3" width="100">
                        {{--<h1 style="color: brown;">Citation</h1>--}}
                        <h4>citation.projecttopcs.org</h4>
                        <p class="copyright mt-3">2018 © Recode Limited.</p>
                        <ul class="footer-texts list-inline mb-2">
                            <li class="list-inline-item"><a href="#" class="">Privacy</a></li>
                            <li class="list-inline-item"><a href="#" class="">Terms & Conditions</a></li>
                        </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- Back to top -->
<a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

<!-- javascript -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/scrollspy.min.js')}}"></script>
<script src="{{asset('js/jquery.blockUI.js')}}"></script>

<!-- carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- page only -->
<script src="{{asset('js/mobileapp-layout.init.js')}}"></script>
</body>
</html>
