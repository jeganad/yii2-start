<?php

use yii\helpers\Url;

?>
<div class="layer-container">
    <!-- BEGIN MENU LAYER -->
    <div class="menu-layer">
        <ul>
            <li data-open-after="true">
                <a href="/">Dashboard</a>
                <span class="hover-bg"></span>
            </li>
            <li class="has-child">
                <a href="javascript:;">Users</a>
                <ul class="child-menu">
                    <li><a href="<?= Url::toRoute(['/user/admin/index']); ?>">User</a><span class="hover-bg"></span></li>
                    <li><a href="<?= Url::toRoute(['/settings/index-log']); ?>">System Logs</a><span class="hover-bg"></span></li>
                    <li><a href="<?= Url::toRoute(['/settings/sys-info']); ?>">System Information</a><span class="hover-bg"></span></li>
                    <li><a href="<?= Url::toRoute(['/settings/index-log']); ?>">System Logs</a><span class="hover-bg"></span></li>
                    <li><a href="<?= Url::toRoute(['/settings/sys-info']); ?>">System Information</a><span class="hover-bg"></span></li>
                    <li><a href="<?= Url::toRoute(['/settings/index-log']); ?>">System Logs</a><span class="hover-bg"></span></li>
                </ul>
                <span class="hover-bg"></span>
            </li>
            <li class="has-child">
                <a href="javascript:;">Settings</a>
                <ul class="child-menu">
                    <li><a href="<?= Url::toRoute(['/settings/sys-info']); ?>">System Information</a><span class="hover-bg"></span></li>
                    <li><a href="<?= Url::toRoute(['/settings/index-log']); ?>">System Logs</a><span class="hover-bg"></span></li>
                    <li><a href="<?= Url::toRoute(['/settings/file-manager']); ?>">File manager</a><span class="hover-bg"></span></li>
                </ul>
                <span class="hover-bg"></span>
            </li>
            <li>
                <a href="<?= Url::toRoute(['//user/security/logout'])?>" data-method="post">Выход</a>
                <span class="hover-bg"></span>
            </li>
            <li>
                <a href="http://themeforest.net/item/pleasure-material-design-responsive-admin-panel/10579013">Buy Pleasure</a>
                <span class="hover-bg"></span></li>
        </ul>
    </div><!--.menu-layer-->
    <!-- END OF MENU LAYER -->

    <!-- BEGIN SEARCH LAYER -->
    <div class="search-layer">
        <div class="search">
            <form action="pages-search-results.html">
                <div class="form-group">
                    <input type="text" id="input-search" class="form-control" placeholder="type something">
                    <button type="submit" class="btn btn-default disabled btn-ripple"><i class="ion-search"></i></button>
                </div>
            </form>
        </div><!--.search-->

        <div class="results">
            <div class="row">
                <div class="col-md-4">
                    <div class="result result-users">
                        <h4>USERS <small>(3)</small></h4>

                        <ul class="list-material">
                            <li class="has-action-left">
                                <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                                <a href="#" class="visible">
                                    <div class="list-action-left">
                                        <img src="../../assets/globals/img/faces/1.jpg" class="face-radius" alt="">
                                    </div>
                                    <div class="list-content">
                                        <span class="title">Pari Subramanium</span>
                                        <span class="caption">Legacy Response Assistant</span>
                                    </div>
                                </a>
                            </li>
                            <li class="has-action-left">
                                <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                                <a href="#" class="visible">
                                    <div class="list-action-left">
                                        <img src="../../assets/globals/img/faces/10.jpg" class="face-radius" alt="">
                                    </div>
                                    <div class="list-content">
                                        <span class="title">Andrew Fox</span>
                                        <span class="caption">National Branding Technician</span>
                                    </div>
                                </a>
                            </li>
                            <li class="has-action-left">
                                <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                                <a href="#" class="visible">
                                    <div class="list-action-left">
                                        <img src="../../assets/globals/img/faces/11.jpg" class="face-radius" alt="">
                                    </div>
                                    <div class="list-content">
                                        <span class="title">Lieke Vermeulen</span>
                                        <span class="caption">Global Tactics Consultant</span>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div><!--.results-user-->
                </div><!--.col-->
                <div class="col-md-4">
                    <div class="result result-posts">
                        <h4>POSTS <small>(5)</small></h4>

                        <ul class="list-material">
                            <li class="has-action-left">
                                <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                                <a href="#" class="visible">
                                    <div class="list-action-left">
                                        <img src="../../assets/globals/img/picjumbo/1.jpg" class="img-radius" alt="">
                                    </div>
                                    <div class="list-content">
                                        <span class="title">Mobile Trends for 2015</span>
                                        <span class="caption">Collaboratively administrate empowered markets via plug-and-play networks.</span>
                                    </div>
                                </a>
                            </li>
                            <li class="has-action-left">
                                <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                                <a href="#" class="visible">
                                    <div class="list-action-left">
                                        <img src="../../assets/globals/img/picjumbo/10.jpg" class="img-radius" alt="">
                                    </div>
                                    <div class="list-content">
                                        <span class="title">Interview with Phillip Riley</span>
                                        <span class="caption">Dynamically procrastinate B2C users after installed base benefits.</span>
                                    </div>
                                </a>
                            </li>
                            <li class="has-action-left">
                                <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                                <a href="#" class="visible">
                                    <div class="list-action-left">
                                        <img src="../../assets/globals/img/picjumbo/11.jpg" class="img-radius" alt="">
                                    </div>
                                    <div class="list-content">
                                        <span class="title">Workspaces</span>
                                        <span class="caption">Dramatically visualize customer directed convergence without revolutionary ROI.</span>
                                    </div>
                                </a>
                            </li>
                            <li class="has-action-left">
                                <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                                <a href="#" class="visible">
                                    <div class="list-action-left">
                                        <img src="../../assets/globals/img/picjumbo/5.jpg" class="img-radius" alt="">
                                    </div>
                                    <div class="list-content">
                                        <span class="title">Graphics &amp; Multimedia</span>
                                        <span class="caption">Efficiently unleash cross-media information without cross-media value.</span>
                                    </div>
                                </a>
                            </li>
                            <li class="has-action-left">
                                <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                                <a href="#" class="visible">
                                    <div class="list-action-left">
                                        <img src="../../assets/globals/img/picjumbo/6.jpg" class="img-radius" alt="">
                                    </div>
                                    <div class="list-content">
                                        <span class="title">Interactive Storytelling</span>
                                        <span class="caption">Quickly maximize timely deliverables for real-time schemas.</span>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div><!--.results-posts-->
                </div><!--.col-->
                <div class="col-md-4">
                    <div class="result result-files">
                        <h4>FILES <small>(0)</small></h4>
                        <p>No results were found</p>
                    </div><!--.results-files-->
                </div><!--.col-->

            </div><!--.row-->
        </div><!--.results-->
    </div><!--.search-layer-->
    <!-- END OF SEARCH LAYER -->

    <!-- BEGIN USER LAYER -->
    <div class="user-layer">
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="active"><a href="#messages" data-toggle="tab">Messages</a></li>
            <li><a href="#notifications" data-toggle="tab">Notifications <span class="badge">3</span></a></li>
            <li><a href="#settings" data-toggle="tab">Settings</a></li>
        </ul>

        <div class="row no-gutters tab-content">

            <div class="tab-pane fade in active" id="messages">
                <div class="col-md-4">
                    <div class="message-list-overlay"></div>

                    <ul class="list-material message-list">
                        <li class="has-action-left has-action-right">
                            <a href="#" class="visible" data-message-id="1">
                                <div class="list-action-left">
                                    <img src="../../assets/globals/img/faces/1.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="title">Pari Subramanium</span>
                                    <span class="caption">Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">15 min</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right">
                            <a href="#" class="visible" data-message-id="2">
                                <div class="list-action-left">
                                    <img src="../../assets/globals/img/faces/10.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="title">Andrew Fox</span>
                                    <span class="caption">Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">2 hr</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right">
                            <a href="#" class="visible" data-message-id="3">
                                <div class="list-action-left">
                                    <img src="../../assets/globals/img/faces/11.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="title">Lieke Vermeulen</span>
                                    <span class="caption">Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">Yesterday</span>
                                    <i class="ion-android-volume-off bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right">
                            <a href="#" class="visible" data-message-id="4">
                                <div class="list-action-left">
                                    <img src="../../assets/globals/img/faces/2.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="title">Benjamin Beck</span>
                                    <span class="caption">Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">1 week ago</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right">
                            <a href="#" class="visible" data-message-id="5">
                                <div class="list-action-left">
                                    <img src="../../assets/globals/img/faces/12.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="title">Joshua Harris</span>
                                    <span class="caption">Dynamically innovate resource-leveling customer service for state of the art customer service. Objectively innovate empowered manufactured products whereas parallel platforms.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">Jan 10, 2015</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right">
                            <a href="#" class="visible" data-message-id="1">
                                <div class="list-action-left">
                                    <img src="../../assets/globals/img/faces/13.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="title">Lisa Cooper</span>
                                    <span class="caption">Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">Jan 5, 2015</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right">
                            <a href="#" class="visible" data-message-id="2">
                                <div class="list-action-left">
                                    <img src="../../assets/globals/img/faces/16.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="title">Matthew Harris</span>
                                    <span class="caption">Globally incubate standards compliant channels before scalable benefits. </span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">Jan 4, 2015</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right">
                            <a href="#" class="visible" data-message-id="3">
                                <div class="list-action-left">
                                    <img src="../../assets/globals/img/faces/17.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="title">Diana Nguyen</span>
                                    <span class="caption">Happy new yeaar!!</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">Jan 1, 2015</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div><!--.col-->
                <div class="col-md-8">
                    <div class="message-send-container">

                        <div class="messages" style="height: calc(100% - 52px);">
                            <div class="message left">
                                <div class="message-text">Hello!</div>
                                <img src="../../assets/globals/img/faces/1.jpg" class="user-picture" alt="">
                            </div>
                            <div class="message right">
                                <div class="message-text">Hi!</div>
                                <div class="message-text">Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</div>
                                <img src="../../assets/globals/img/faces/tolga-ergin.jpg" class="user-picture" alt="">
                            </div>
                            <div class="message left">
                                <div class="message-text">Dramatically synthesize integrated schemas with optimal networks.</div>
                                <img src="../../assets/globals/img/faces/1.jpg" class="user-picture" alt="">
                            </div>
                            <div class="message right">
                                <div class="message-text">Interactively procrastinate high-payoff content</div>
                                <img src="../../assets/globals/img/faces/tolga-ergin.jpg" class="user-picture" alt="">
                            </div>
                            <div class="message left">
                                <div class="message-text">Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</div>
                                <div class="message-text">Credibly reintermediate backend ideas for cross-platform models. Continually reintermediate integrated processes through technically sound intellectual capital. Holistically foster superior methodologies without market-driven best practices.</div>
                                <img src="../../assets/globals/img/faces/1.jpg" class="user-picture" alt="">
                            </div>
                            <div class="message right">
                                <div class="message-text">Distinctively exploit optimal alignments for intuitive bandwidth</div>
                                <img src="../../assets/globals/img/faces/tolga-ergin.jpg" class="user-picture" alt="">
                            </div>
                            <div class="message left">
                                <div class="message-text">Quickly coordinate e-business applications through</div>
                                <img src="../../assets/globals/img/faces/1.jpg" class="user-picture" alt="">
                            </div>
                        </div><!--.messages-->

                        <div class="send-message">
                            <div class="input-group">
                                <div class="inputer inputer-blue">
                                    <div class="input-wrapper">
                                        <textarea rows="1" id="send-message-input" class="form-control js-auto-size" placeholder="Message" style="height: 1px;"></textarea>
                                    </div>
                                </div><!--.inputer-->
									<span class="input-group-btn">
										<button id="send-message-button" class="btn btn-blue btn-ripple" type="button" style="height: 0px;">Send</button>
									</span>
                            </div>
                        </div><!--.send-message-->

                    </div><!--.message-send-container-->
                </div><!--.col-->

                <div class="mobile-back">
                    <div class="mobile-back-button"><i class="ion-android-arrow-back"></i></div>
                </div><!--.mobile-back-->
            </div><!--.tab-pane #messages-->

            <div class="tab-pane fade" id="notifications">

                <div class="col-md-6 col-md-offset-3">

                    <ul class="list-material has-hidden">
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <i class="ion-bag icon text-indigo"></i>
                                </div>
                                <div class="list-content">
                                    <span class="caption">Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">2 hr</span>
                                    <i class="ion-record text-green bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <i class="ion-image text-green icon"></i>
                                </div>
                                <div class="list-content">
                                    <span class="caption">Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">16:55</span>
                                    <i class="ion-record text-green bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <img src="../../assets/globals/img/faces/13.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="caption">Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">Yesterday</span>
                                    <i class="ion-record text-green bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <img src="../../assets/globals/img/faces/14.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="caption">Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">2 days ago</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <i class="ion-location text-light-blue icon"></i>
                                </div>
                                <div class="list-content">
                                    <span class="caption">Dynamically innovate resource-leveling customer service for state of the art customer service. Objectively innovate empowered manufactured products whereas parallel platforms.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">1 week ago</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <i class="ion-bookmark text-deep-orange icon"></i>
                                </div>
                                <div class="list-content">
                                    <span class="caption">Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">10 Jan</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <i class="ion-locked icon"></i>
                                </div>
                                <div class="list-content">
                                    <span class="caption">Phosfluorescently engage worldwide methodologies with web-enabled technology.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">9 Jan</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <img src="../../assets/globals/img/faces/17.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="caption">Synergistically evolve 2.0 technologies rather than just in time initiatives. Quickly deploy strategic networks with compelling e-business. Credibly pontificate highly efficient manufactured products and enabled data.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">7 Jan</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <i class="ion-navigate text-indigo icon"></i>
                                </div>
                                <div class="list-content">
                                    <span class="caption">Objectively pursue diverse catalysts for change for interoperable meta-services. Dramatically mesh low-risk high-yield alignments before transparent e-tailers.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">7 Jan</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div><!--.col-->
            </div><!--.tab-pane #notifications-->

            <div class="tab-pane fade" id="settings">
                <div class="col-md-6 col-md-offset-3">

                    <div class="settings-panel">
                        <p class="text-grey">Here's where you can check your settings of Pleasure Admin Panel. If you need an extra information from us, do not hesitate to contact.</p>

                        <div class="legend">Privacy Controls</div>
                        <ul>
                            <li>
                                Show my profile on search results
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings1" type="checkbox" hidden="hidden" checked="checked">
                                    <label for="settings1"></label>
                                </div><!--.switcher-->
                            </li>
                            <li>
                                Only God can judge me
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings2" type="checkbox" hidden="hidden" checked="checked">
                                    <label for="settings2"></label>
                                </div><!--.switcher-->
                            </li>
                            <li>
                                Review tags people add to your own posts
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings3" type="checkbox" hidden="hidden">
                                    <label for="settings3"></label>
                                </div><!--.switcher-->
                            </li>
                        </ul>

                        <div class="legend">Notifications</div>
                        <ul>
                            <li>
                                Activity that involves you
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings4" type="checkbox" hidden="hidden" checked="checked">
                                    <label for="settings4"></label>
                                </div><!--.switcher-->
                            </li>
                            <li>
                                Birthdays
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings5" type="checkbox" hidden="hidden">
                                    <label for="settings5"></label>
                                </div><!--.switcher-->
                            </li>
                            <li>
                                Calendar events
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings6" type="checkbox" hidden="hidden">
                                    <label for="settings6"></label>
                                </div><!--.switcher-->
                            </li>
                        </ul>

                        <div class="legend">Newsletter</div>
                        <ul>
                            <li>
                                Friend requests
                                <div class="checkboxer checkboxer-indigo pull-right">
                                    <input type="checkbox" id="checkboxSettings1" value="option1" checked="checked">
                                    <label for="checkboxSettings1"></label>
                                </div>
                            </li>
                            <li>
                                People you may know
                                <div class="checkboxer checkboxer-indigo pull-right">
                                    <input type="checkbox" id="checkboxSettings2" value="option1">
                                    <label for="checkboxSettings2"></label>
                                </div>
                            </li>
                        </ul>

                    </div><!--.settings-panel-->

                </div><!--.col-->
            </div><!--.tab-pane #settings-->

        </div><!--.row-->
    </div><!--.user-layer-->
    <!-- END OF USER LAYER -->

</div>