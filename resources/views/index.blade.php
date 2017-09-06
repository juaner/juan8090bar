@extends('layouts.main')
@section("content")
    <div class="left" id="main-content">
        <div class="section">
            <div class="section-title">最新文章</div>
            <div class="section-content">
                <div class="post">
                    <div class="post-title"><h2><a href="#">{{$data[0]['title']}}</a></h2></div>
                    <div class="post-date">{{$data[0]['ctime']}} </div>
                    <div class="post-body">
                        <p>{{$data[0]['content']}}</p>

                        <a href="http://www.cssmoban.com/" class="more">Read more &#187;</a>

                    </div>

                </div>
                <div class="content-separator"></div>
                <div class="col3 left">
                    <div class="column-content">
                        <div class="post">
                            <h3><a href="#">{{$data[1]['title']}}</a></h3>
                            <p>{{$data[1]['profile']}}</p>
                            <a href="#" class="more">阅读更多 &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col3 col3-mid left">
                    <div class="column-content">
                        <div class="post">
                            <h3><a href="#">{{$data[2]['title']}}</a></h3>
                            <p>{{$data[2]['profile']}}</p>
                            <a href="#" class="more">阅读更多 &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col3 right">
                    <div class="column-content">
                        <div class="post">
                            <h3><a href="#">{{$data[3]['title']}}</a></h3>
                            <p>{{$data[3]['profile']}}</p>
                            <a href="#" class="more">阅读更多 &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="clearer">&nbsp;</div>
            </div>
        </div>
        <div class="clearer">&nbsp;</div>
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
                    <a href="#" style="font-size: 120%">优化</a>
                    <a href="#" style="font-size: 120%">正则</a>
                    <a href="#" style="font-size: 120%">git</a>
                    <a href="#" style="font-size: 90%">框架</a>
                    <a href="#" style="font-size: 80%">composer</a>
                    <a href="#" style="font-size: 220%">设计模式</a>
                    <a href="#" style="font-size: 100%">Linux</a>
                    <a href="#" style="font-size: 110%">随笔</a>
                    <a href="#" style="font-size: 150%">数据结构</a>
                    <a href="#" style="font-size: 140%">架构</a>
                    <a href="#" style="font-size: 100%">PHP</a>
                    <a href="#" style="font-size: 90%">算法</a>
                    <a href="#" style="font-size: 120%">安全</a>
                    <a href="#" style="font-size: 200%">MySQL</a>
                </div>
            </div>

        </div>

    </div>
    <div class="clearer">&nbsp;</div>
@endsection
