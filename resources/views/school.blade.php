@extends('layouts.base')

@section('content')
    <section class=" content">
        <div class="top-section">
            <div class="container">
                <h2 class="element-invisible">You are here</h2>
                <div class="breadcrumb"><a href="http://shfamily.com/shanghai/event#"></a><a href="http://shfamily.com/">Home</a>
                    | <a href="http://shfamily.com/shanghai/event#">Event list</a></div>
            </div>
        </div>


        <!-- THEME DEBUG -->
        <!-- CALL: theme('region') -->
        <!-- FILE NAME SUGGESTIONS:
           * region--content.tpl.php
           x region.tpl.php
        -->
        <!-- BEGIN OUTPUT from 'sites/all/themes/family/templates/region.tpl.php' -->


        <!-- THEME DEBUG -->
        <!-- CALL: theme('block') -->
        <!-- FILE NAME SUGGESTIONS:
           * block--system--main.tpl.php
           * block--system.tpl.php
           * block--content.tpl.php
           x block.tpl.php
        -->
        <!-- BEGIN OUTPUT from 'sites/all/themes/family/templates/block.tpl.php' -->
        <span class="hidden">split-block</span>


        <!-- THEME DEBUG -->
        <!-- CALL: theme('fs_search_event_list_page') -->
        <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_list_page.tpl.php' -->
        <div class="container">
            <div class="col-xs-12 title_events_search_top">Events Search</div>
        </div>
        <div class="pagination-search-day container">
            <input type="hidden" id="current_city" value="shanghai">

            <div class="col-xs-12 col-sm-12 seach-day ">
                <div class="wrapper_search_day">
                    <div class="title_search_day">Scheduled Date</div>
                    <div class="wrapper_search_day_post">


                        <a href="http://shfamily.com/shanghai/event?date_start=2018-09-07%2000%3A00%3A00&amp;page=0"
                           class="item-pagination-day-content">
                            <div class="col-xs-3 col-sm-2 col-md-1 item-pagination-day  ">
                                <div class="week_events">FRI</div>
                                <div class="day_events ">07</div>
                                <div class="status_events hidden">
                                    <div class="col-xs-3 color-item color-blue "></div>
                                    <div class="col-xs-3  color-item color-red "></div>
                                    <div class="col-xs-3  color-item color-yellow"></div>
                                </div>
                            </div>
                        </a>

                        <a href="http://shfamily.com/shanghai/event?date_start=2018-09-08%2000%3A00%3A00&amp;page=0"
                           class="item-pagination-day-content">
                            <div class="col-xs-3 col-sm-2 col-md-1 item-pagination-day  ">
                                <div class="week_events">SAT</div>
                                <div class="day_events ">08</div>
                                <div class="status_events hidden">
                                    <div class="col-xs-3 color-item color-blue "></div>
                                    <div class="col-xs-3  color-item color-red "></div>
                                    <div class="col-xs-3  color-item color-yellow"></div>
                                </div>
                            </div>
                        </a>

                        <a href="http://shfamily.com/shanghai/event?date_start=2018-09-09%2000%3A00%3A00&amp;page=0"
                           class="item-pagination-day-content">
                            <div class="col-xs-3 col-sm-2 col-md-1 item-pagination-day  ">
                                <div class="week_events">SUN</div>
                                <div class="day_events ">09</div>
                                <div class="status_events hidden">
                                    <div class="col-xs-3 color-item color-blue "></div>
                                    <div class="col-xs-3  color-item color-red "></div>
                                    <div class="col-xs-3  color-item color-yellow"></div>
                                </div>
                            </div>
                        </a>

                        <a href="http://shfamily.com/shanghai/event?date_start=2018-09-10%2000%3A00%3A00&amp;page=0"
                           class="item-pagination-day-content">
                            <div class="col-xs-3 col-sm-2 col-md-1 item-pagination-day  ">
                                <div class="week_events">MON</div>
                                <div class="day_events ">10</div>
                                <div class="status_events hidden">
                                    <div class="col-xs-3 color-item color-blue "></div>
                                    <div class="col-xs-3  color-item color-red "></div>
                                    <div class="col-xs-3  color-item color-yellow"></div>
                                </div>
                            </div>
                        </a>

                        <a href="http://shfamily.com/shanghai/event?date_start=2018-09-11%2000%3A00%3A00&amp;page=0"
                           class="item-pagination-day-content">
                            <div class="col-xs-3 col-sm-2 col-md-1 item-pagination-day  ">
                                <div class="week_events">TUE</div>
                                <div class="day_events ">11</div>
                                <div class="status_events hidden">
                                    <div class="col-xs-3 color-item color-blue "></div>
                                    <div class="col-xs-3  color-item color-red "></div>
                                    <div class="col-xs-3  color-item color-yellow"></div>
                                </div>
                            </div>
                        </a>

                        <a href="http://shfamily.com/shanghai/event?date_start=2018-09-12%2000%3A00%3A00&amp;page=0"
                           class="item-pagination-day-content">
                            <div class="col-xs-3 col-sm-2 col-md-1 item-pagination-day  ">
                                <div class="week_events">WED</div>
                                <div class="day_events ">12</div>
                                <div class="status_events hidden">
                                    <div class="col-xs-3 color-item color-blue "></div>
                                    <div class="col-xs-3  color-item color-red "></div>
                                    <div class="col-xs-3  color-item color-yellow"></div>
                                </div>
                            </div>
                        </a>

                        <a href="http://shfamily.com/shanghai/event?date_start=2018-09-13%2000%3A00%3A00&amp;page=0"
                           class="item-pagination-day-content">
                            <div class="col-xs-3 col-sm-2 col-md-1 item-pagination-day  active_day">
                                <div class="week_events">THU</div>
                                <div class="day_events ">13</div>
                                <div class="status_events hidden">
                                    <div class="col-xs-3 color-item color-blue "></div>
                                    <div class="col-xs-3  color-item color-red "></div>
                                    <div class="col-xs-3  color-item color-yellow"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="event-search  col-xs-12 col-sm-12">
                <div class="wrapper_fields_search">
                    <div class="form-group category_field_container col-sm-8 row">
                        <select id="category_event" title="Category" name="category_event"
                                class="form-control bs-select-hidden">
                            <option class="bs-title-option" value="">Category</option>

                            <option value="1113">Cinema</option>
                            <option value="1120">Community</option>
                            <option value="1118">Dance</option>
                            <option value="1122">Dining</option>
                            <option value="1123">Education</option>
                            <option value="1114">Experiences</option>
                            <option value="1117">Family</option>
                            <option value="1124">Health &amp; Welness</option>
                            <option value="1115">Music</option>
                            <option value="1121">Sport</option>
                            <option value="1116">Stage</option>
                            <option value="1119">Travel</option>
                        </select>
                        <div class="btn-group bootstrap-select form-control">
                            <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown"
                                    data-id="category_event" title="Category"><span
                                        class="filter-option pull-left">Category</span>&nbsp;<span class="caret"></span>
                            </button>
                            <div class="dropdown-menu open">
                                <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"></div>
                                <ul class="dropdown-menu inner" role="menu">
                                    <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Cinema</span><span
                                                    class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Community</span><span
                                                    class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Dance</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                    </li>
                                    <li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Dining</span><span
                                                    class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Education</span><span
                                                    class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Experiences</span><span
                                                    class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Family</span><span
                                                    class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Health &amp; Welness</span><span
                                                    class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Music</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                    </li>
                                    <li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Sport</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                    </li>
                                    <li data-original-index="11"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Stage</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                    </li>
                                    <li data-original-index="12"><a tabindex="0" class="" style="" data-tokens="null"><span
                                                    class="text">Travel</span><span
                                                    class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form-group btn_search_container col-sm-4">
                        <input type="button" id="edit-submit" name="op" value="Search" class="form-submit">
                    </div>
                </div>
            </div>


        </div>
        <div class="container">
            <div class="events-wrapper row">

                <div class="row col-xs-12 col-md-9 directory_list_container">
                    <div class="col-xs-12 search_directory_list">
                        <div class="col-xs-12 title_list">
                            <h1> Featured Events </h1>
                            <div class="result_list">
                                Results : 198
                            </div>
                        </div>
                    </div>
                    <div class="item-directory-list col-xs-12">


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('fs_search_event_event_list_view') -->
                        <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->
                        <div class="item-directory col-xs-12">
                            <div class="item-wrapper col-xs-12">
                                <div class="col-sm-3 item-directory-img-section"><a
                                            href="http://shfamily.com/event/musiclab"><img
                                                src="./Events in Shanghai_files/430_103" class="img-responsive"></a></div>
                                <div class="col-sm-9 description-item-directory-container">
                                    <div class="row title-item-directory">
                                        <span><a href="http://shfamily.com/event/musiclab">MusicLab</a></span>
                                        <div class="underline_directory"></div>
                                    </div>
                                    <div class="row event_day"><span class="glyphicon glyphicon-calendar"
                                                                     aria-hidden="true"></span>
                                        Monday 12th, February 2018 <span
                                                class="to_separe">  &nbsp;&nbsp; TO &nbsp;&nbsp;  </span> Monday 31st,
                                        December 2018
                                    </div>
                                    <div class="row description-item-directory" style="height: 53px; overflow: hidden;">
                                        In Music LAB we are people passionate about music that believe that learning music
                                        must be fun!
                                        We want the children to enjoy music, fostering curiosity in a joyful and
                                        motivational way, using music as a tool for developing skills as creativity...
                                    </div>
                                    <div class="row btn-details">
                                        <a class="btn btn-default" href="http://shfamily.com/event/musiclab">Details</a>
                                        <a class="btn btn-error booking_btn"
                                           href="https://www.247tickets.com/t/music-lab?utm_source=shanghaifamily&amp;utm_medium=onsite"
                                           target="_blank">Book Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('fs_search_event_event_list_view') -->
                        <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->
                        <div class="item-directory col-xs-12">
                            <div class="item-wrapper col-xs-12">
                                <div class="col-sm-3 item-directory-img-section"><a
                                            href="http://shfamily.com/event/live-jazz-music-every-friday-kk-vienna"><img
                                                src="./Events in Shanghai_files/430_107" class="img-responsive"></a></div>
                                <div class="col-sm-9 description-item-directory-container">
                                    <div class="row title-item-directory">
                                        <span><a href="http://shfamily.com/event/live-jazz-music-every-friday-kk-vienna">Live Jazz Music Every Friday @ K&amp;K Vienna</a></span>
                                        <div class="underline_directory"></div>
                                    </div>
                                    <div class="row event_day"><span class="glyphicon glyphicon-calendar"
                                                                     aria-hidden="true"></span>
                                        Friday 2nd, March 2018 <span
                                                class="to_separe">  &nbsp;&nbsp; TO &nbsp;&nbsp;  </span> Friday 26th,
                                        October 2018
                                    </div>
                                    <div class="row description-item-directory" style="height: 53px; overflow: hidden;">
                                        Shanghai Old Keller Jazz Band is one of the most prestigious jazz bands in Shanghai
                                        that has played in high level venues like several five-star hotels such as Shanghai
                                        Peace Hotel. Their love and dedication for music shine through and it is so s...
                                    </div>
                                    <div class="row btn-details">
                                        <a class="btn btn-default"
                                           href="http://shfamily.com/event/live-jazz-music-every-friday-kk-vienna">Details</a>
                                        <a class="btn btn-error booking_btn"
                                           href="https://www.247tickets.com/t/live-jazz-music-every-friday?utm_source=shanghaifamily&amp;utm_medium=onsite"
                                           target="_blank">Book Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('fs_search_event_event_list_view') -->
                        <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->
                        <div class="item-directory col-xs-12">
                            <div class="item-wrapper col-xs-12">
                                <div class="col-sm-3 item-directory-img-section"><a
                                            href="http://shfamily.com/event/cut-rooftop-brunch"><img
                                                src="./Events in Shanghai_files/430_108" class="img-responsive"></a></div>
                                <div class="col-sm-9 description-item-directory-container">
                                    <div class="row title-item-directory">
                                    <span><a
                                                href="http://shfamily.com/event/cut-rooftop-brunch">THE CUT Rooftop Brunch</a></span>
                                        <div class="underline_directory"></div>
                                    </div>
                                    <div class="row event_day"><span class="glyphicon glyphicon-calendar"
                                                                     aria-hidden="true"></span>
                                        Saturday 3rd, March 2018 <span
                                                class="to_separe">  &nbsp;&nbsp; TO &nbsp;&nbsp;  </span> Sunday 30th,
                                        September 2018
                                    </div>
                                    <div class="row description-item-directory" style="height: 53px; overflow: hidden;">
                                        It is not ‘bye-bye’ to the buffet, but rather ‘hello’ to an all-new brunching
                                        experience at THE CUT Rooftop. Placing a refreshing emphasis on many ‘choice-first’
                                        options to drink &amp; dine, right down to the music selection! #MyBrunch,
                                        Shanghai’s n...
                                    </div>
                                    <div class="row btn-details">
                                        <a class="btn btn-default" href="http://shfamily.com/event/cut-rooftop-brunch">Details</a>
                                        <a class="btn btn-error booking_btn"
                                           href="https://www.247tickets.com/t/the-cut-rooftop-brunch?utm_source=shanghaifamily&amp;utm_medium=onsite"
                                           target="_blank">Book Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('fs_search_event_event_list_view') -->
                        <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->
                        <div class="item-directory col-xs-12">
                            <div class="item-wrapper col-xs-12">
                                <div class="col-sm-3 item-directory-img-section"><a
                                            href="http://shfamily.com/event/opera-night-every-saturday-kk-vienna"><img
                                                src="./Events in Shanghai_files/430_109" class="img-responsive"></a></div>
                                <div class="col-sm-9 description-item-directory-container">
                                    <div class="row title-item-directory">
                                        <span><a href="http://shfamily.com/event/opera-night-every-saturday-kk-vienna">Opera Night Every Saturday @ K&amp;K Vienna</a></span>
                                        <div class="underline_directory"></div>
                                    </div>
                                    <div class="row event_day"><span class="glyphicon glyphicon-calendar"
                                                                     aria-hidden="true"></span>
                                        Saturday 3rd, March 2018 <span
                                                class="to_separe">  &nbsp;&nbsp; TO &nbsp;&nbsp;  </span> Saturday 29th,
                                        December 2018
                                    </div>
                                    <div class="row description-item-directory" style="height: 53px; overflow: hidden;">
                                        KK Vienna is the meeting place for incredible world-class music. You can discover
                                        classical music in a lively, social, casual, drink and food concert experience.
                                        There’s no veil between the audience and the musicians; you can connect personally
                                        ...
                                    </div>
                                    <div class="row btn-details">
                                        <a class="btn btn-default"
                                           href="http://shfamily.com/event/opera-night-every-saturday-kk-vienna">Details</a>
                                        <a class="btn btn-error booking_btn"
                                           href="https://www.247tickets.com/t/opera-night-every-saturday?utm_source=shanghaifamily&amp;utm_medium=onsite"
                                           target="_blank">Book Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('fs_search_event_event_list_view') -->
                        <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->
                        <div class="item-directory col-xs-12">
                            <div class="item-wrapper col-xs-12">
                                <div class="col-sm-3 item-directory-img-section"><a
                                            href="http://shfamily.com/event/oriental-pearl-tower-dongfang-mingzhu"><img
                                                src="./Events in Shanghai_files/430_0" class="img-responsive"></a></div>
                                <div class="col-sm-9 description-item-directory-container">
                                    <div class="row title-item-directory">
                                        <span><a href="http://shfamily.com/event/oriental-pearl-tower-dongfang-mingzhu">Oriental Pearl Tower (Dongfang Mingzhu)</a></span>
                                        <div class="underline_directory"></div>
                                    </div>
                                    <div class="row event_day"><span class="glyphicon glyphicon-calendar"
                                                                     aria-hidden="true"></span>
                                        Sunday 1st, January 2017 <span
                                                class="to_separe">  &nbsp;&nbsp; TO &nbsp;&nbsp;  </span> Monday 31st,
                                        December 2018
                                    </div>
                                    <div class="row description-item-directory" style="height: 53px; overflow: hidden;">
                                        As an old saying goes: one who fails to reach the Great Wall is not a true man.
                                        Similarly, what a pity it is if you miss the Oriental Pearl Tower when visiting
                                        Shanghai! As the landmark of Shanghai, the Oriental Pearl Tower is located at the
                                        Luj...
                                    </div>
                                    <div class="row btn-details">
                                        <a class="btn btn-default"
                                           href="http://shfamily.com/event/oriental-pearl-tower-dongfang-mingzhu">Details</a>
                                        <a class="btn btn-error booking_btn"
                                           href="https://www.247tickets.com/t/oriental-pearl-tower?utm_source=shanghaifamily&amp;utm_medium=onsite"
                                           target="_blank">Book Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('fs_search_event_event_list_view') -->
                        <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->
                        <div class="item-directory col-xs-12">
                            <div class="item-wrapper col-xs-12">
                                <div class="col-sm-3 item-directory-img-section"><a
                                            href="http://shfamily.com/event/learn-chinese-kungfu"><img
                                                src="./Events in Shanghai_files/430_1" class="img-responsive"></a></div>
                                <div class="col-sm-9 description-item-directory-container">
                                    <div class="row title-item-directory">
                                    <span><a
                                                href="http://shfamily.com/event/learn-chinese-kungfu">Learn Chinese Kungfu</a></span>
                                        <div class="underline_directory"></div>
                                    </div>
                                    <div class="row event_day"><span class="glyphicon glyphicon-calendar"
                                                                     aria-hidden="true"></span>
                                        Sunday 1st, January 2017 <span
                                                class="to_separe">  &nbsp;&nbsp; TO &nbsp;&nbsp;  </span> Monday 31st,
                                        December 2018
                                    </div>
                                    <div class="row description-item-directory" style="height: 53px; overflow: hidden;">
                                        HongWu Kungfu Centre is in the heart of Shanghai’s buzzing Tai Kang Rd artist area
                                        and has rapidly become the studio for anyone and everyone who has an interest in
                                        Chinese Kung Fu.
                                    </div>
                                    <div class="row btn-details">
                                        <a class="btn btn-default" href="http://shfamily.com/event/learn-chinese-kungfu">Details</a>
                                        <a class="btn btn-error booking_btn"
                                           href="https://www.247tickets.com/t/learn-chinese-kungfu?utm_source=shanghaifamily&amp;utm_medium=onsite"
                                           target="_blank">Book Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('fs_search_event_event_list_view') -->
                        <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->
                        <div class="item-directory col-xs-12">
                            <div class="item-wrapper col-xs-12">
                                <div class="col-sm-3 item-directory-img-section"><a
                                            href="http://shfamily.com/event/sailing-experience"><img
                                                src="./Events in Shanghai_files/430_2" class="img-responsive"></a></div>
                                <div class="col-sm-9 description-item-directory-container">
                                    <div class="row title-item-directory">
                                        <span><a href="http://shfamily.com/event/sailing-experience">Sailing Experience</a></span>
                                        <div class="underline_directory"></div>
                                    </div>
                                    <div class="row event_day"><span class="glyphicon glyphicon-calendar"
                                                                     aria-hidden="true"></span>
                                        Sunday 1st, January 2017 <span
                                                class="to_separe">  &nbsp;&nbsp; TO &nbsp;&nbsp;  </span> Monday 31st,
                                        December 2018
                                    </div>
                                    <div class="row description-item-directory" style="height: 53px; overflow: hidden;">
                                        Let's enjoy fun sailing with the best coach in Shanghai! This experience is short
                                        adventuring by small sailboat. Learn the basic concepts about sailing and the boat,
                                        then we will get hands on experience! Wear live-jackets, take the boat with the...
                                    </div>
                                    <div class="row btn-details">
                                        <a class="btn btn-default" href="http://shfamily.com/event/sailing-experience">Details</a>
                                        <a class="btn btn-error booking_btn"
                                           href="https://www.247tickets.com/t/sailing-experience?utm_source=shanghaifamily&amp;utm_medium=onsite"
                                           target="_blank">Book Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('fs_search_event_event_list_view') -->
                        <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->
                        <div class="item-directory col-xs-12">
                            <div class="item-wrapper col-xs-12">
                                <div class="col-sm-3 item-directory-img-section"><a
                                            href="http://shfamily.com/event/sounds-great-record-your-own-music"><img
                                                src="./Events in Shanghai_files/430_4" class="img-responsive"></a></div>
                                <div class="col-sm-9 description-item-directory-container">
                                    <div class="row title-item-directory">
                                        <span><a href="http://shfamily.com/event/sounds-great-record-your-own-music">SOUNDS GREAT - Record Your Own Music</a></span>
                                        <div class="underline_directory"></div>
                                    </div>
                                    <div class="row event_day"><span class="glyphicon glyphicon-calendar"
                                                                     aria-hidden="true"></span>
                                        Sunday 1st, January 2017 <span
                                                class="to_separe">  &nbsp;&nbsp; TO &nbsp;&nbsp;  </span> Monday 31st,
                                        December 2018
                                    </div>
                                    <div class="row description-item-directory" style="height: 53px; overflow: hidden;">
                                        Sounds Great! Come to a live show studio to record your own music!
                                    </div>
                                    <div class="row btn-details">
                                        <a class="btn btn-default"
                                           href="http://shfamily.com/event/sounds-great-record-your-own-music">Details</a>
                                        <a class="btn btn-error booking_btn"
                                           href="https://www.247tickets.com/t/sounds-great-record-your-own-music?utm_source=shanghaifamily&amp;utm_medium=onsite"
                                           target="_blank">Book Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('fs_search_event_event_list_view') -->
                        <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->
                        <div class="item-directory col-xs-12">
                            <div class="item-wrapper col-xs-12">
                                <div class="col-sm-3 item-directory-img-section"><a
                                            href="http://shfamily.com/event/cryo-world"><img
                                                src="./Events in Shanghai_files/430_5" class="img-responsive"></a></div>
                                <div class="col-sm-9 description-item-directory-container">
                                    <div class="row title-item-directory">
                                        <span><a href="http://shfamily.com/event/cryo-world">Cryo World</a></span>
                                        <div class="underline_directory"></div>
                                    </div>
                                    <div class="row event_day"><span class="glyphicon glyphicon-calendar"
                                                                     aria-hidden="true"></span>
                                        Sunday 1st, January 2017 <span
                                                class="to_separe">  &nbsp;&nbsp; TO &nbsp;&nbsp;  </span> Monday 31st,
                                        December 2018
                                    </div>
                                    <div class="row description-item-directory" style="height: 53px; overflow: hidden;">
                                        Cryotherapy is a safe, fast and incredibly effective way to reboot your body and
                                        mind.
                                    </div>
                                    <div class="row btn-details">
                                        <a class="btn btn-default" href="http://shfamily.com/event/cryo-world">Details</a>
                                        <a class="btn btn-error booking_btn"
                                           href="https://www.247tickets.com/t/cryo-world?utm_source=shanghaifamily&amp;utm_medium=onsite"
                                           target="_blank">Book Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_event_list_view.tpl.php' -->


                    </div>
                    <div class="pagination-directory  col-xs-12">
                        <h2 class="element-invisible">Pages</h2>
                        <div class="item-list">
                            <ul class="pager">
                                <li class="pager-current first">1</li>
                                <li class="pager-item"><a title="Go to page 2"
                                                          href="http://shfamily.com/shanghai/event?page=1&amp;date_start=2018-09-13%2000%3A00%3A00">2</a>
                                </li>
                                <li class="pager-item"><a title="Go to page 3"
                                                          href="http://shfamily.com/shanghai/event?page=2&amp;date_start=2018-09-13%2000%3A00%3A00">3</a>
                                </li>
                                <li class="pager-item"><a title="Go to page 4"
                                                          href="http://shfamily.com/shanghai/event?page=3&amp;date_start=2018-09-13%2000%3A00%3A00">4</a>
                                </li>
                                <li class="pager-item"><a title="Go to page 5"
                                                          href="http://shfamily.com/shanghai/event?page=4&amp;date_start=2018-09-13%2000%3A00%3A00">5</a>
                                </li>
                                <li class="pager-item"><a title="Go to page 6"
                                                          href="http://shfamily.com/shanghai/event?page=5&amp;date_start=2018-09-13%2000%3A00%3A00">6</a>
                                </li>
                                <li class="pager-item"><a title="Go to page 7"
                                                          href="http://shfamily.com/shanghai/event?page=6&amp;date_start=2018-09-13%2000%3A00%3A00">7</a>
                                </li>
                                <li class="pager-item"><a title="Go to page 8"
                                                          href="http://shfamily.com/shanghai/event?page=7&amp;date_start=2018-09-13%2000%3A00%3A00">8</a>
                                </li>
                                <li class="pager-item"><a title="Go to page 9"
                                                          href="http://shfamily.com/shanghai/event?page=8&amp;date_start=2018-09-13%2000%3A00%3A00">9</a>
                                </li>
                                <li class="pager-ellipsis">…</li>
                                <li class="pager-next"><a title="Go to next page"
                                                          href="http://shfamily.com/shanghai/event?page=1&amp;date_start=2018-09-13%2000%3A00%3A00">next
                                        ›</a></li>
                                <li class="pager-last last"><a title="Go to last page"
                                                               href="http://shfamily.com/shanghai/event?page=21&amp;date_start=2018-09-13%2000%3A00%3A00">last
                                        »</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- END OUTPUT from 'sites/all/modules/custom/fs_search/modules/fs_search_event/templates/fs_search_event_list_page.tpl.php' -->


                <!-- END OUTPUT from 'sites/all/themes/family/templates/block.tpl.php' -->


                <!-- END OUTPUT from 'sites/all/themes/family/templates/region.tpl.php' -->


                <div class="col-md-3 sidebar_second sidebar_second_section">
                    <div class="col-xs-12 hidden-xs hidden-sm ">


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('region') -->
                        <!-- FILE NAME SUGGESTIONS:
                           * region--sidebar-second.tpl.php
                           x region.tpl.php
                        -->
                        <!-- BEGIN OUTPUT from 'sites/all/themes/family/templates/region.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('block') -->
                        <!-- FILE NAME SUGGESTIONS:
                           * block--bean--sh-event-list-300x600-one.tpl.php
                           x block--bean.tpl.php
                           * block--sidebar-second.tpl.php
                           * block.tpl.php
                        -->
                        <!-- BEGIN OUTPUT from 'sites/all/themes/family/templates/block/block--bean.tpl.php' -->
                        <span class="hidden">split-block</span>

                        <div id="block-bean-sh-event-list-300x600-one" style="clear:both"
                             class="sidebar_second_dfp hidden-xs hidden-sm block block-bean">


                            <div class="content">


                                <!-- THEME DEBUG -->
                                <!-- CALL: theme('entity') -->
                                <!-- FILE NAME SUGGESTIONS:
                                   * ds-1col--bean--100.tpl.php
                                   * ds-1col--bean-dfp-default.tpl.php
                                   * ds-1col--bean-dfp.tpl.php
                                   * ds-1col--bean-default.tpl.php
                                   * ds-1col--bean.tpl.php
                                   x ds-1col.tpl.php
                                   * bean--sh-event-list-300x600-one.tpl.php
                                   * bean--dfp--default.tpl.php
                                   * bean--dfp.tpl.php
                                   * bean.tpl.php
                                   * entity.tpl.php
                                -->
                                <!-- BEGIN OUTPUT from 'sites/all/themes/family/templates/ds-1col.tpl.php' -->
                                <div about="/block/sh-event-list-300x600-one" typeof=""
                                     class="ds-1col col-xs-12 entity entity-bean bean-dfp view-mode-default clearfix">


                                    <div class="field field-name-bean-dfp-default field-type-ds field-label-hidden">
                                        <div class="field-items">
                                            <div class="field-item even">

                                                <!-- THEME DEBUG -->
                                                <!-- CALL: theme('fs_dfp_ds_default') -->
                                                <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_dfp/templates/fs_dfp_ds_default.tpl.php' -->
                                                <div class="col-xs-12 dfs_family dfs_family_large">
                                                    <script type="text/javascript">googletag.cmd.push(function () {
                                                            googletag.defineSlot('/129806946/FA_Events_PremiumBox1_300x600', [300, 600], 'div-gpt-ad-1476338906344-0').addService(googletag.pubads());
                                                            googletag.pubads().enableSingleRequest();
                                                            googletag.enableServices();
                                                        });</script>
                                                    <div id="div-gpt-ad-1476338906344-0" style="">
                                                        <script type="text/javascript">
                                                            jQuery(document).ready(function () {
                                                                googletag.cmd.push(function () {
                                                                    googletag.display('div-gpt-ad-1476338906344-0');
                                                                });
                                                            });
                                                        </script>
                                                        <div id="google_ads_iframe_/129806946/FA_Events_PremiumBox1_300x600_0__container__"
                                                             style="border: 0pt none;">
                                                            <iframe id="google_ads_iframe_/129806946/FA_Events_PremiumBox1_300x600_0"
                                                                    title="3rd party ad content"
                                                                    name="google_ads_iframe_/129806946/FA_Events_PremiumBox1_300x600_0"
                                                                    width="300" height="600" scrolling="no" marginwidth="0"
                                                                    marginheight="0" frameborder="0"
                                                                    style="border: 0px; vertical-align: bottom;"
                                                                    src="./Events in Shanghai_files/saved_resource.html"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12  dfs_family_mobile  hidden">
                                                </div>


                                                <!-- END OUTPUT from 'sites/all/modules/custom/fs_dfp/templates/fs_dfp_ds_default.tpl.php' -->

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- END OUTPUT from 'sites/all/themes/family/templates/ds-1col.tpl.php' -->

                            </div>
                        </div>


                        <!-- END OUTPUT from 'sites/all/themes/family/templates/block/block--bean.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('block') -->
                        <!-- FILE NAME SUGGESTIONS:
                           * block--bean--sh-event-list-300x300-one.tpl.php
                           x block--bean.tpl.php
                           * block--sidebar-second.tpl.php
                           * block.tpl.php
                        -->
                        <!-- BEGIN OUTPUT from 'sites/all/themes/family/templates/block/block--bean.tpl.php' -->
                        <span class="hidden">split-block</span>

                        <div id="block-bean-sh-event-list-300x300-one" style="clear:both"
                             class="sidebar_second_dfp hidden-xs hidden-sm block block-bean">


                            <div class="content">


                                <!-- THEME DEBUG -->
                                <!-- CALL: theme('entity') -->
                                <!-- FILE NAME SUGGESTIONS:
                                   * ds-1col--bean--102.tpl.php
                                   * ds-1col--bean-dfp-default.tpl.php
                                   * ds-1col--bean-dfp.tpl.php
                                   * ds-1col--bean-default.tpl.php
                                   * ds-1col--bean.tpl.php
                                   x ds-1col.tpl.php
                                   * bean--sh-event-list-300x300-one.tpl.php
                                   * bean--dfp--default.tpl.php
                                   * bean--dfp.tpl.php
                                   * bean.tpl.php
                                   * entity.tpl.php
                                -->
                                <!-- BEGIN OUTPUT from 'sites/all/themes/family/templates/ds-1col.tpl.php' -->
                                <div about="/block/sh-event-list-300x300-one" typeof=""
                                     class="ds-1col col-xs-12 entity entity-bean bean-dfp view-mode-default clearfix">


                                    <div class="field field-name-bean-dfp-default field-type-ds field-label-hidden">
                                        <div class="field-items">
                                            <div class="field-item even">

                                                <!-- THEME DEBUG -->
                                                <!-- CALL: theme('fs_dfp_ds_default') -->
                                                <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_dfp/templates/fs_dfp_ds_default.tpl.php' -->
                                                <div class="col-xs-12 dfs_family dfs_family_large">
                                                    <script type="text/javascript">googletag.cmd.push(function () {
                                                            googletag.defineSlot('/129806946/FA_Events_MediumRectangle1_300x300', [300, 300], 'div-gpt-ad-1476338784636-0').addService(googletag.pubads());
                                                            googletag.pubads().enableSingleRequest();
                                                            googletag.enableServices();
                                                        });</script>
                                                    <div id="div-gpt-ad-1476338784636-0" style="">
                                                        <script type="text/javascript">
                                                            jQuery(document).ready(function () {
                                                                googletag.cmd.push(function () {
                                                                    googletag.display('div-gpt-ad-1476338784636-0');
                                                                });
                                                            });
                                                        </script>
                                                        <div id="google_ads_iframe_/129806946/FA_Events_MediumRectangle1_300x300_0__container__"
                                                             style="border: 0pt none;">
                                                            <iframe id="google_ads_iframe_/129806946/FA_Events_MediumRectangle1_300x300_0"
                                                                    title="3rd party ad content"
                                                                    name="google_ads_iframe_/129806946/FA_Events_MediumRectangle1_300x300_0"
                                                                    width="300" height="300" scrolling="no" marginwidth="0"
                                                                    marginheight="0" frameborder="0"
                                                                    style="border: 0px; vertical-align: bottom;"
                                                                    src="./Events in Shanghai_files/saved_resource(1).html"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12  dfs_family_mobile  hidden">
                                                </div>


                                                <!-- END OUTPUT from 'sites/all/modules/custom/fs_dfp/templates/fs_dfp_ds_default.tpl.php' -->

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- END OUTPUT from 'sites/all/themes/family/templates/ds-1col.tpl.php' -->

                            </div>
                        </div>


                        <!-- END OUTPUT from 'sites/all/themes/family/templates/block/block--bean.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('block') -->
                        <!-- FILE NAME SUGGESTIONS:
                           * block--bean--sh-event-list-300x300-two.tpl.php
                           x block--bean.tpl.php
                           * block--sidebar-second.tpl.php
                           * block.tpl.php
                        -->
                        <!-- BEGIN OUTPUT from 'sites/all/themes/family/templates/block/block--bean.tpl.php' -->
                        <span class="hidden">split-block</span>

                        <div id="block-bean-sh-event-list-300x300-two" style="clear:both"
                             class="sidebar_second_dfp hidden-xs hidden-sm block block-bean">


                            <div class="content">


                                <!-- THEME DEBUG -->
                                <!-- CALL: theme('entity') -->
                                <!-- FILE NAME SUGGESTIONS:
                                   * ds-1col--bean--103.tpl.php
                                   * ds-1col--bean-dfp-default.tpl.php
                                   * ds-1col--bean-dfp.tpl.php
                                   * ds-1col--bean-default.tpl.php
                                   * ds-1col--bean.tpl.php
                                   x ds-1col.tpl.php
                                   * bean--sh-event-list-300x300-two.tpl.php
                                   * bean--dfp--default.tpl.php
                                   * bean--dfp.tpl.php
                                   * bean.tpl.php
                                   * entity.tpl.php
                                -->
                                <!-- BEGIN OUTPUT from 'sites/all/themes/family/templates/ds-1col.tpl.php' -->
                                <div about="/block/sh-event-list-300x300-two" typeof=""
                                     class="ds-1col col-xs-12 entity entity-bean bean-dfp view-mode-default clearfix">


                                    <div class="field field-name-bean-dfp-default field-type-ds field-label-hidden">
                                        <div class="field-items">
                                            <div class="field-item even">

                                                <!-- THEME DEBUG -->
                                                <!-- CALL: theme('fs_dfp_ds_default') -->
                                                <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_dfp/templates/fs_dfp_ds_default.tpl.php' -->
                                                <div class="col-xs-12 dfs_family dfs_family_large">
                                                    <script type="text/javascript">googletag.cmd.push(function () {
                                                            googletag.defineSlot('/129806946/FA_Events_MediumRectangle2_300x300', [300, 300], 'div-gpt-ad-1476338817458-0').addService(googletag.pubads());
                                                            googletag.pubads().enableSingleRequest();
                                                            googletag.enableServices();
                                                        });</script>
                                                    <div id="div-gpt-ad-1476338817458-0" style="">
                                                        <script type="text/javascript">
                                                            jQuery(document).ready(function () {
                                                                googletag.cmd.push(function () {
                                                                    googletag.display('div-gpt-ad-1476338817458-0');
                                                                });
                                                            });
                                                        </script>
                                                        <div id="google_ads_iframe_/129806946/FA_Events_MediumRectangle2_300x300_0__container__"
                                                             style="border: 0pt none;">
                                                            <iframe id="google_ads_iframe_/129806946/FA_Events_MediumRectangle2_300x300_0"
                                                                    title="3rd party ad content"
                                                                    name="google_ads_iframe_/129806946/FA_Events_MediumRectangle2_300x300_0"
                                                                    width="300" height="300" scrolling="no" marginwidth="0"
                                                                    marginheight="0" frameborder="0"
                                                                    style="border: 0px; vertical-align: bottom;"
                                                                    src="./Events in Shanghai_files/saved_resource(2).html"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12  dfs_family_mobile  hidden">
                                                </div>


                                                <!-- END OUTPUT from 'sites/all/modules/custom/fs_dfp/templates/fs_dfp_ds_default.tpl.php' -->

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- END OUTPUT from 'sites/all/themes/family/templates/ds-1col.tpl.php' -->

                            </div>
                        </div>


                        <!-- END OUTPUT from 'sites/all/themes/family/templates/block/block--bean.tpl.php' -->


                        <!-- THEME DEBUG -->
                        <!-- CALL: theme('block') -->
                        <!-- FILE NAME SUGGESTIONS:
                           * block--bean--sh-event-list-300x600-two.tpl.php
                           x block--bean.tpl.php
                           * block--sidebar-second.tpl.php
                           * block.tpl.php
                        -->
                        <!-- BEGIN OUTPUT from 'sites/all/themes/family/templates/block/block--bean.tpl.php' -->
                        <span class="hidden">split-block</span>

                        <div id="block-bean-sh-event-list-300x600-two" style="clear:both"
                             class="sidebar_second_dfp hidden-xs hidden-sm block block-bean">


                            <div class="content">


                                <!-- THEME DEBUG -->
                                <!-- CALL: theme('entity') -->
                                <!-- FILE NAME SUGGESTIONS:
                                   * ds-1col--bean--101.tpl.php
                                   * ds-1col--bean-dfp-default.tpl.php
                                   * ds-1col--bean-dfp.tpl.php
                                   * ds-1col--bean-default.tpl.php
                                   * ds-1col--bean.tpl.php
                                   x ds-1col.tpl.php
                                   * bean--sh-event-list-300x600-two.tpl.php
                                   * bean--dfp--default.tpl.php
                                   * bean--dfp.tpl.php
                                   * bean.tpl.php
                                   * entity.tpl.php
                                -->
                                <!-- BEGIN OUTPUT from 'sites/all/themes/family/templates/ds-1col.tpl.php' -->
                                <div about="/block/sh-event-list-300x600-two" typeof=""
                                     class="ds-1col col-xs-12 entity entity-bean bean-dfp view-mode-default clearfix">


                                    <div class="field field-name-bean-dfp-default field-type-ds field-label-hidden">
                                        <div class="field-items">
                                            <div class="field-item even">

                                                <!-- THEME DEBUG -->
                                                <!-- CALL: theme('fs_dfp_ds_default') -->
                                                <!-- BEGIN OUTPUT from 'sites/all/modules/custom/fs_dfp/templates/fs_dfp_ds_default.tpl.php' -->
                                                <div class="col-xs-12 dfs_family dfs_family_large">
                                                    <script type="text/javascript">googletag.cmd.push(function () {
                                                            googletag.defineSlot('/129806946/FA_Events_PremiumBox2_300x600', [300, 600], 'div-gpt-ad-1476417457937-0').addService(googletag.pubads());
                                                            googletag.pubads().enableSingleRequest();
                                                            googletag.enableServices();
                                                        });</script>
                                                    <div id="div-gpt-ad-1476417457937-0" style="">
                                                        <script type="text/javascript">
                                                            jQuery(document).ready(function () {
                                                                googletag.cmd.push(function () {
                                                                    googletag.display('div-gpt-ad-1476417457937-0');
                                                                });
                                                            });
                                                        </script>
                                                        <div id="google_ads_iframe_/129806946/FA_Events_PremiumBox2_300x600_0__container__"
                                                             style="border: 0pt none;">
                                                            <iframe id="google_ads_iframe_/129806946/FA_Events_PremiumBox2_300x600_0"
                                                                    title="3rd party ad content"
                                                                    name="google_ads_iframe_/129806946/FA_Events_PremiumBox2_300x600_0"
                                                                    width="300" height="600" scrolling="no" marginwidth="0"
                                                                    marginheight="0" frameborder="0"
                                                                    style="border: 0px; vertical-align: bottom;"
                                                                    src="./Events in Shanghai_files/saved_resource(3).html"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12  dfs_family_mobile  hidden">
                                                </div>


                                                <!-- END OUTPUT from 'sites/all/modules/custom/fs_dfp/templates/fs_dfp_ds_default.tpl.php' -->

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- END OUTPUT from 'sites/all/themes/family/templates/ds-1col.tpl.php' -->

                            </div>
                        </div>


                        <!-- END OUTPUT from 'sites/all/themes/family/templates/block/block--bean.tpl.php' -->


                        <!-- END OUTPUT from 'sites/all/themes/family/templates/region.tpl.php' -->


                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
