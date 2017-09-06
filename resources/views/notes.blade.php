<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen" />
    <title>Website Template: Simple Organization - Archives (demo)</title>
</head>

<body>

<div id="site-wrapper">

    <div id="header">

        <div id="top">

            <div class="left" id="logo">
                <a href="index.html"><img src="img/logo.gif" alt="" /></a>
            </div>

            <div class="left navigation" id="main-nav">

                <ul class="tabbed">
                    <li class="current-tab"><a href="{{route('index')}}">首页</a></li>
                    <li><a href="{{route('notes')}}">笔记</a></li>
                    <li><a href="{{route('other')}}">杂文</a></li>
                    <li><a href="{{route('notes')}}">美食</a></li>
                    <li><a href="{{route('notes')}}">关于</a></li>
                </ul>
                <div class="clearer">&nbsp;</div>

            </div>

            <div class="clearer">&nbsp;</div>

        </div>

        <div class="navigation" id="sub-nav">

            <ul class="tabbed">
                <li><a href="index.html">PHP</a></li>
                <li><a href="style-demo.html">MySQL</a></li>
                <li><a href="comments.html">Linux</a></li>
                <li class="current-tab"><a href="archives.html">设计模式</a></li>
                <li><a href="no-subnavigation.html">数据结构和算法</a></li>
                <li><a href="left-sidebar.html">安全</a></li>
                <li><a href="single-column.html">其他</a></li>
            </ul>

            <div class="clearer">&nbsp;</div>

        </div>

    </div>

    <div class="main" id="main-two-columns">

        <div class="left" id="main-content">

            <h1>Archives for 2009</h1>

            <div class="archive-pagination archive-pagination-top">

                <div class="left"><a href="#">&#171; Previous page</a></div>
                <div class="right"><a href="#">Next page &#187;</a></div>

                <div class="clearer">&nbsp;</div>

            </div>
            @foreach($data as $item)

            <div class="post">

                <div class="archive-post-date">
                    <div class="archive-post-day">20</div>
                    <div class="archive-post-month">SEP</div>
                </div>

                <div class="archive-post-title">
                    <h3><a href="http://www.cssmoban.com/simple-organization-website-template/">{{$item['title']}}</a></h3>
                    <div class="post-date">15:29, Sunday, September 20, 2009 in <a href="#">Category Name</a></div>
                </div>

                <div class="clearer">&nbsp;</div>

            </div>

            <div class="archive-separator"></div>

            @endforeach


            <div class="post">

                <div class="archive-post-date">
                    <div class="archive-post-day">06</div>
                    <div class="archive-post-month">SEP</div>
                </div>

                <div class="archive-post-title">
                    <h3><a href="http://www.cssmoban.com/deep-blue-website-template/">Website Template: Deep Blue</a></h3>
                    <div class="post-date">22:17, Sunday, September 6, 2007 in <a href="#">Category Name</a></div>
                </div>

                <div class="clearer">&nbsp;</div>

            </div>

            <div class="archive-pagination archive-pagination-bottom">

                <div class="left"><a href="#">&#171; Previous page</a></div>
                <div class="right"><a href="#">Next page &#187;</a></div>

                <div class="clearer">&nbsp;</div>

            </div>

        </div>

        <div class="right sidebar" id="sidebar">
            <div class="section">
                <div class="section-title">搜索</div>
                <div class="section-content">
                    <form method="post" action="">
                        <input type="text" class="text" size="28"/> &nbsp; <input type="submit" class="button" value="提交"/>
                    </form>
                </div>
            </div>
            <div class="section">
                <div class="section-title">博主推荐</div>
                <div class="section-content">
                    <ul class="nice-list">
                        <li>
                            <div class="left"><a href="#">Aenean tempor arcu..</a></div>
                            <div class="right">Oct 12</div>
                            <div class="clearer">&nbsp;</div>
                        </li>
                        <li>
                            <div class="left"><a href="#">Justo interdum rutrum</a></div>
                            <div class="right">Sep 15</div>
                            <div class="clearer">&nbsp;</div>
                        </li>
                        <li>
                            <div class="left"><a href="#">In nec justo in urna</a></div>
                            <div class="right">Sep 12</div>
                            <div class="clearer">&nbsp;</div>
                        </li>
                        <li>
                            <div class="left"><a href="#">Accumsan condimentum</a></div>
                            <div class="right">Sep 6</div>
                            <div class="clearer">&nbsp;</div>
                        </li>
                        <li>
                            <div class="left"><a href="#">Etiam commodo bibendum</a></div>
                            <div class="right">Aug 27</div>
                            <div class="clearer">&nbsp;</div>
                        </li>
                        <li>
                            <div class="left"><a href="#">Mauris euismod justo</a></div>
                            <div class="right">Aug 21</div>
                            <div class="clearer">&nbsp;</div>
                        </li>
                        <li><a href="#" class="more">Browse Archives &#187;</a></li>
                    </ul>
                </div>
            </div>

            <div class="section">
                <div class="section-title">浏览推荐</div>
                <div class="section-content">
                    <ul class="nice-list">
                        <li><a href="#">Elem Semper</a> <span class="quiet">- Director</span></li>
                        <li><a href="#">Porttitor Urna</a> <span class="quiet">- Lead Writer</span></li>
                        <li><a href="#">Congue Porttitor</a> <span class="quiet">- Editor</span></li>
                        <li><a href="#">Etiam Blandit</a> <span class="quiet">- Writer</span></li>
                        <li><a href="#">Diet Tesque</a> <span class="quiet">- Writer</span></li>
                    </ul>
                </div>
            </div>

            <div class="section">
                <div class="section-title">关键字</div>
                <div class="section-content">
                    <div class="quiet">
                        <a href="#" style="font-size: 120%">优化</a> <a href="#" style="font-size: 120%">正则</a>                     <a href="#" style="font-size: 120%">git</a> <a href="#" style="font-size: 90%">框架</a> <a href="#"
                                                                                                                                                                                                                           style="font-size: 80%">composer</a>
                        <a href="#" style="font-size: 220%">设计模式</a> <a href="#" style="font-size: 100%">Linux</a> <a href="#"
                                                                                                                      style="font-size: 110%">随笔</a>
                        <a href="#" style="font-size: 150%">数据结构</a> <a href="#" style="font-size: 140%">架构</a> <a href="#"
                                                                                                                   style="font-size: 100%">PHP</a>
                        <a href="#" style="font-size: 90%">算法</a> <a href="#" style="font-size: 120%">安全</a> <a href="#"
                                                                                                                style="font-size: 200%">MySQL</a>
                    </div>
                </div>

            </div>

        </div>
        <div class="clearer">&nbsp;</div>

    </div>

    <div id="footer">

        <div class="left" id="footer-left">

            <img src="img/logo-small.gif" alt="" class="left" />

            <p>&copy; 2002-2009 Simple Organization. All rights Reserved</p>

            <p class="quiet"><a href="http://www.cssmoban.com/">Website template</a> from <a href="http://cssmoban.com/">cssMoban.com</a></p>

            <div class="clearer">&nbsp;</div>

        </div>

        <div class="right" id="footer-right">

            <p class="large"><a href="#">首页</a> <span class="text-separator">|</span> <a href="#">笔记</a> <span class="text-separator">|</span> <a href="#">杂文</a> <span class="text-separator">|</span> <a href="#">美食</a> <span class="text-separator">|</span> <strong><a href="#">关于!</a></strong> <span class="text-separator">|</span> <a href="#top" class="quiet">Page Top &uarr;</a></p>

        </div>

        <div class="clearer">&nbsp;</div>

    </div>


</div>

</body>
</html>