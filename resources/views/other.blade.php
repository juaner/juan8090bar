@extends('layouts.main')
@section('content')
<div class="section">


    <div class="section-content">

        <div class="post">

            <div class="post-title"><h2><a href="#">文章标题</a></h2></div>

            <div class="post-date">Saturday, September 19, 2009 by 亚娟</div>

            <div class="post-body">

                <p>一、Mysql中能够使用索引的典型场景

                    1. 匹配全值，对索引中所有列都指定具体值。 =
                    2. 匹配值的范围查询，对索引的值能够进行范围查找 >,<,>=,<= 等
                    3. 匹配最左前缀，仅仅使用索引中的最左边列进行查找，c1+c2+c3 联合索引，c1,c1+c2,c1+c2+c3 可用
                    4. 仅仅对索引进行查询，当查询的列都在索引的字段中时，查询的效率更高
                    5. 匹配列前缀，仅仅使用索引中的第一列，并且只包含索引第一列的开头一部分进行查找。 Like “abc%”
                    6. 能够实现索引匹配部分精确而其他部分进行范围匹配
                    7. 如果列名是索引，那么使用column_name is null 就会使用索引，例如：article_id 为索引，select * from article where article_id is null 就能用到索引
                    二、存在索引但不能使用索引的典型场景
                    1. 以%开头的LIKE查询不能够利用B-Tree索引，执行计划中key的值为NULL表示没有使用索引，对应上面的5 。？为什么不用用到，B-Tree结构 推荐使用全文索引来解决类似的全文检索问题
                    2. 数据类型出现隐式转换的时候也不会使用索引，特别是当列类型是字符串，那么一定记得在where条件中把字符常量值用引号引起来，否则即便这个列上有索引，Mysql也不会用到，因为Mysql默认吧输入的常量值进行转换以后才进行检索。select * from users where user_name=1 不会用到，select * from users where user_name = ‘1’ 会用到索引，因为user_name 的类型是字符串
                    3. 复合索引的情况下，假如查询条件不包含索引列最左边部分，既不满足最左侧原则，是不会使用复合索引的，对应上面的3
                    4. 如果MySQL估计使用索引比全表扫描更慢，则不使用索引
                    5. 用or分割开的条件，如果or前的条件中的列有索引，而后面的列中没有索引，那么涉及的索引都不会被用到
                </p>

            </div>

        </div>
    </div>

</div>
<div class="section-content" id="main-content">

    <div class="post">

        <div class="post-title"><h1>Post having Comments</h1></div>

        <div class="post-date">Saturday, September 19, 2009 by Viktor Persson</div>

        <div class="post-body">
            Post content..
        </div>

    </div>

    <div id="comments">

        <div class="left">
            <h2>Comments: 5</h2>
        </div>

        <h3 class="right">
            <a href="#respond">Leave a reply &#187;</a>
        </h3>

        <div class="clearer">&nbsp;</div>

        <div class="comment-list-wrapper">

            <ul class="comment-list">

                <li class="comment comment-parent" id="comment-47">

                    <div class="comment-profile-wrapper left">

                        <div class="comment-profile">
                            <div class="comment-gravatar"><img src="{{ asset('img/sample-gravatar.gif') }}" height="40" width="40" alt="" /></div>
                            <div class="comment-author"><a href="#">Viktor Persson</a></div>
                        </div>

                    </div>

                    <div class="comment-content-wrapper right">
                        <div class="comment-content-wrapper-2">

                            <div class="comment-body">

                                <div class="comment-arrow"></div>

                                <div class="post-date">

                                    <div class="left">August 13th, 2009 at 22:58 <span class="text-separator">|</span> <a href="#">Reply &#187;</a></div>
                                    <div class="right"><a href="#comment-47">#47</a></div>

                                    <div class="clearer">&nbsp;</div>

                                </div>

                                <div class="comment-text">
                                    <p>Nested comments.</p>
                                </div>

                                <div class="clearer">&nbsp;</div>

                            </div>

                        </div>
                    </div>

                    <div class="clearer">&nbsp;</div>

                    <ul class="children">

                        <li class="comment" id="comment-49">

                            <div class="comment-content">

                                <div class="comment-body">

                                    <div class="post-date">

                                        <div class="left"><img src="img/sample-gravatar.gif" height="14" width="14" alt="" /> <span class="loud"><a href="#">Viktor Persson</a></span> - August 13th, 2009 at 23:05 <span class="text-separator">|</span> <a href="#">Reply &#187;</a></div>

                                        <div class="right"><a href="#comment-49">#49</a></div>

                                        <div class="clearer">&nbsp;</div>

                                    </div>

                                    <div class="comment-text">
                                        <p>Ligula in felis tristique convallis.</p>
                                    </div>

                                </div>

                            </div>

                            <ul class="children">

                                <li class="comment" id="comment-50">

                                    <div class="comment-content">

                                        <div class="comment-body">

                                            <div class="post-date">

                                                <div class="left"><img src="img/sample-gravatar.gif" width="14" height="14" alt="" /> <span class="loud"><a href="#">Viktor Persson</a></span> - August 13th, 2009 at 23:05</div>

                                                <div class="right"><a href="#comment-50">#50</a></div>

                                                <div class="clearer">&nbsp;</div>

                                            </div>

                                            <div class="comment-text">
                                                <p>Pellentesque sit amet.</p>
                                            </div>

                                        </div>

                                    </div>

                                </li>
                            </ul>

                        </li>

                    </ul>
                </li>

                <li class="comment comment-single" id="comment-48">

                    <div class="comment-profile-wrapper left">

                        <div class="comment-profile">
                            <div class="comment-gravatar"><img src="img/sample-gravatar.gif" width="40" height="40" alt="" /></div>
                            <div class="comment-author"><a href="#">Viktor Persson</a></div>
                        </div>

                    </div>

                    <div class="comment-content-wrapper right">
                        <div class="comment-content-wrapper-2">

                            <div class="comment-body">

                                <div class="comment-arrow"></div>


                                <div class="post-date">

                                    <div class="left">August 13th, 2009 at 23:03 <span class="text-separator">|</span> <a href="#">Reply &#187;</a></div>
                                    <div class="right"><a href="#comment-48" title="Permanent link to this reply">#48</a></div>

                                    <div class="clearer">&nbsp;</div>
                                </div>


                                <div class="comment-text">
                                    <p>Vestibulum porttitor varius augue sit amet dictum. Donec pretium sodales felis id ultricies. Integer pretium, elit nec rutrum ullamcorper.</p>
                                </div>

                                <div class="clearer">&nbsp;</div>

                            </div>

                        </div>
                    </div>

                    <div class="clearer">&nbsp;</div>

                </li>

                <li class="comment comment-single" id="comment-51">

                    <div class="comment-profile-wrapper left">

                        <div class="comment-profile">
                            <img src="img/sample-gravatar.gif" width="40" height="40" alt="" />
                            <div class="comment-author"><a href="#">Viktor Persson</a></div>
                        </div>

                    </div>

                    <div class="comment-content-wrapper right">
                        <div class="comment-content-wrapper-2">

                            <div class="comment-body">

                                <div class="comment-arrow"></div>

                                <div class="post-date">

                                    <div class="left">August 13th, 2009 at 23:05 <span class="text-separator">|</span> <a href="#">Reply &#187;</a></div>
                                    <div class="right"><a href="#comment-51">#51</a></div>

                                    <div class="clearer">&nbsp;</div>

                                </div>

                                <div class="comment-text">
                                    <p>Morbi sollicitudin mollis dapibus.</p>
                                </div>

                                <div class="clearer">&nbsp;</div>

                            </div>

                        </div>
                    </div>

                    <div class="clearer">&nbsp;</div>

                </li>

            </ul>

        </div>

    </div>

    <div id="respond">

        <ul>
            <li>

                <div class="legend" id="comment-form-title">Leave a Reply</div>

                <div class="comment-profile-wrapper left">

                    <div class="comment-profile">
                        <div class="comment-gravatar"><img src="img/sample-gravatar.gif" width="40" height="40" alt="Your gravatar" /></div>
                        <div class="comment-author">Your Name</div>
                    </div>

                </div>

                <div class="comment-content-wrapper">

                    <div class="comment-body">

                        <div class="comment-arrow"></div>

                        <form action="" method="post" id="commentform">

                            <fieldset>

                                <div class="form-row comment-input-text"><textarea name="comment" id="comment" cols="10" rows="10" tabindex="4"></textarea></div>

                                <div class="form-row comment-input-name">

                                    <div class="form-property required"><label for="author">Name *</label></div>
                                    <div class="form-value"><input type="text" name="author" id="author" value="" size="28" tabindex="1" class="text" /></div>

                                    <div class="clearer">&nbsp;</div>

                                </div>

                                <div class="form-row comment-input-email">

                                    <div class="form-property required"><label for="email">Email *</label></div>
                                    <div class="form-value"><input type="text" name="email" id="email" value="" size="28" tabindex="2" class="text" /></div>

                                    <div class="clearer">&nbsp;</div>

                                </div>

                                <div class="form-row comment-input-website">

                                    <div class="form-property"><label for="url">Website</label></div>
                                    <div class="form-value"><input type="text" name="url" id="url" value="" size="28" tabindex="3" class="text" /></div>

                                    <div class="clearer">&nbsp;</div>

                                </div>

                                <div class="form-row form-row-submit">
                                    <input type="submit" class="button" value="Submit Comment" />
                                </div>

                            </fieldset>

                        </form>

                    </div>

                    <div class="clearer">&nbsp;</div>

                </div>

                <div class="clearer">&nbsp;</div>

            </li>

        </ul>

    </div>

</div>
@endsection