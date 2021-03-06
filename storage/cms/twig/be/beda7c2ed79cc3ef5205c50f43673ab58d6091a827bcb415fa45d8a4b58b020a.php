<?php

/* /Applications/AMPPS/www/eks/themes/goeroe-semantic-october/pages/home.htm */
class __TwigTemplate_f3e95ad3c5c6140fc62ca4980954023f91eb287784fdfa95238c52223d5fa618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "<style>
    .hidden.menu {
        display: none;
    }
    
    .masthead.segment {
        min-height: 700px;
        padding: 1em 0em;
    }

    .masthead .ui.menu .ui.button {
        margin-left: 0.5em;
    }
    
    .masthead h1.ui.header {
        margin-top: 3em;
        margin-bottom: 0em;
        font-size: 4em;
        font-weight: bold;
        
        text-shadow: 0px 0px 4px rgba(0, 0, 0, 0);
        color: rgba(255, 255, 255, 1);
    }
    .masthead h2 {
        font-size: 1.7em;
        font-weight: normal;
    }
    
    .masthead .start.button {
        margin-top: 1em;
    }
    
    .footer.segment {
        padding: 5em 0em;
    }
    
    .secondary.pointing.menu .toc.item {
        display: none;
    }
    
    .ui.icon.header {
        margin: 2em 0em;
    }
    
    @media only screen and (max-width: 700px) {
        .ui.fixed.menu {
            display: none !important;
        }
        
        .secondary.pointing.menu .item,
        secondary.pointing.menu .menu {
            display: none;
        }
        .secondary.pointing.menu .toc.item {
            display: block;
        }
        
        .masthead.segment {
            min-height: 350px;
        }
        .masthead h1.ui.header {
            font-size: 2em;
            margin-top: 1.5em;
        }
        .masthead h2 {
            margin-top: 0.5em;
            font-size: 1.5em;
        }
        
        .masthead .start.button {
            margin-top: 0.5em;
        }
    }
</style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 77
        echo "<!-- FOLLOWING MENU -->
<div class=\"ui large top fixed hidden menu\">
    <div class=\"ui container\">
        <div href=\"#\" class=\"header item\">
            <img class=\"logo\" src=\"";
        // line 81
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/semantic-october.png");
        echo "\">
        </div>
        <a class=\"active item\">Home</a>
        <a class=\"item\">Services</a>
        <a class=\"item\">Portfolio</a>
        <a class=\"item\">Customers</a>
        <div class=\"right menu\">
            <div class=\"item\">
                <a class=\"ui orange button\">Contact us</a>
            </div>
        </div>
    </div>
</div>

<!-- SIDEBAR MENU -->
<div class=\"ui vertical inverted sidebar menu\">
    <a class=\"active item\">Home</a>
    <a class=\"item\">Services</a>
    <a class=\"item\">Portfolio</a>
    <a class=\"item\">Customers</a>
    <a class=\"item\">Contact us</a>
</div>

<!-- PAGE CONTENT -->
<div class=\"pusher\">
    <div class=\"ui inverted vertical masthead center aligned segment\">
        <div class=\"ui container\">
            <div class=\"ui large secondary inverted pointing menu\">
                <a class=\"toc item\">
                    <i class=\"sidebar icon\"></i>
                </a>
                <a class=\"active item\">Home</a>
                <a class=\"item\">Services</a>
                <a class=\"item\">Portfolio</a>
                <a class=\"item\">Customers</a>
                <div class=\"right item\">
                    <a class=\"ui inverted button\">Contact us</a>
                </div>
            </div>
        </div>
        <div class=\"ui text container\">
            <h1 class=\"ui inverted header\">
                Semantic October
            </h1>
            <h2>A Semantic UI theme for OctoberCMS.</h2>
            <div class=\"ui huge orange start button\">Get started <i class=\"right arrow icon\"></i></div>
        </div>
    </div>
    <div class=\"ui container\">
        <div class=\"ui center aligned basic segment\">
            <h1 class=\"ui icon header\">
                <i class=\"lightning icon\"></i>
                <div class=\"content\">
                    Services
                    <div class=\"sub header\">We provide services. Check some of them out here.</div>
                </div>
            </h1>
            <div class=\"ui grid\">
                <div class=\"stackable doubling four column row\">
                    <div class=\"column\">
                        <img class=\"ui centered small image\" src=\"";
        // line 141
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/services/CONSULTING.png");
        echo "\">
                        <h2 class=\"center aligned header\">Consulting</h2>
                    </div>
                    <div class=\"column\">
                        <img class=\"ui centered small image\" src=\"";
        // line 145
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/services/WEB.png");
        echo "\">
                        <h2 class=\"center aligned header\">Web</h2>
                    </div>
                    <div class=\"column\">
                        <img class=\"ui centered small image\" src=\"";
        // line 149
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/services/PRINT.png");
        echo "\">
                        <h2 class=\"center aligned header\">Print</h2>
                    </div>
                    <div class=\"column\">
                        <img class=\"ui centered small image\" src=\"";
        // line 153
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/services/PHOTOGRAPHY.png");
        echo "\">
                        <h2 class=\"center aligned header\">Photography</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"ui section divider\"></div>
        <div class=\"ui center aligned basic segment\">
            <h1 class=\"ui icon header\">
                <i class=\"lab icon\"></i>
                <div class=\"content\">
                    Projects
                    <div class=\"sub header\">We do projects. Check some of them out here.</div>
                </div>
            </h1>
            <div class=\"ui grid\">
                <div class=\"stackable doubling four column row\">
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/1\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/2\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/3\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/4\">
                        </div>
                    </div>
                </div>
                <div class=\"stackable doubling four column row\">
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/5\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/6\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/7\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/8\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class=\"ui section divider\"></div>
        <div class=\"ui center aligned basic segment\">
            <h1 class=\"ui icon header\">
                <i class=\"users icon\"></i>
                <div class=\"content\">
                    Customers
                    <div class=\"sub header\">We have customers. Check some of them out here.</div>
                </div>
            </h1>
            <div class=\"ui grid\">
                <div class=\"stackable doubling four column row\">
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2010/04/babelfish-legal/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2010/04/bf_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2010/03/top-spice/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2010/03/top_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2009/01/wem/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2009/01/waterm_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2014/07/black-fox/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2014/01/Black_fox_m.jpg\"></a>
                    </div>
                </div>
                <div class=\"stackable doubling four column row\">
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2012/04/boundary/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2012/04/boundry_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2012/01/mountain/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2012/01/mountain_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2013/02/coworker/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2013/02/co_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2009/04/pencil/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2009/04/pencil_m.jpg\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"ui inverted vertical footer segment\">
        <div class=\"ui center aligned container\">
            <div class=\"ui stackable inverted divided grid\">
                <div class=\"four wide column\">
                    <h4 class=\"ui inverted header\">Link Group 1</h4>
                    <div class=\"ui inverted link list\">
                        <a href=\"#\" class=\"item\">Link One</a>
                        <a href=\"#\" class=\"item\">Link Two</a>
                        <a href=\"#\" class=\"item\">Link Three</a>
                        <a href=\"#\" class=\"item\">Link One</a>
                    </div>
                </div>
                <div class=\"four wide column\">
                    <h4 class=\"ui inverted header\">Link Group 2</h4>
                    <div class=\"ui inverted link list\">
                        <a href=\"#\" class=\"item\">Link One</a>
                        <a href=\"#\" class=\"item\">Link Two</a>
                        <a href=\"#\" class=\"item\">Link Three</a>
                        <a href=\"#\" class=\"item\">Link One</a>
                    </div>
                </div>
                <div class=\"four wide column\">
                    <h4 class=\"ui inverted header\">Link Group 3</h4>
                    <div class=\"ui inverted link list\">
                        <a href=\"#\" class=\"item\">Link One</a>
                        <a href=\"#\" class=\"item\">Link Two</a>
                        <a href=\"#\" class=\"item\">Link Three</a>
                        <a href=\"#\" class=\"item\">Link One</a>
                    </div>
                </div>
                <div class=\"four wide column\">
                    <h4 class=\"ui inverted header\">Link Group 4</h4>
                    <div class=\"ui inverted link list\">
                        <a href=\"#\" class=\"item\">Link One</a>
                        <a href=\"#\" class=\"item\">Link Two</a>
                        <a href=\"#\" class=\"item\">Link Three</a>
                        <a href=\"#\" class=\"item\">Link One</a>
                    </div>
                </div>
                
            </div>
            <div class=\"ui inverted section divider\"></div>
            <img src=\"";
        // line 354
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/semantic-october.png");
        echo "\" class=\"ui centered mini image\">
            <div class=\"ui horizontal inverted small divided link list\">
                <a class=\"item\" href=\"#\">Site Map</a>
                <a class=\"item\" href=\"#\">Contact Us</a>
                <a class=\"item\" href=\"#\">Terms</a>
                <a class=\"item\" href=\"#\">Privacy Policy</a>
            </div>
        </div>
    </div>
</div>
";
        // line 364
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 365
        echo "<script>
    \$(document)
        .ready(function() {
            
            // FIX MENU WHEN PASSED
            \$('.masthead')
                .visibility({
                    once: false,
                    onBottomPassed: function() {
                        \$('.fixed.menu').transition('fade in');
                    },
                    onBottomPassedReverse: function() {
                        \$('.fixed.menu').transition('fade out');
                    }
                })
            ;
            
            // CREATE SIDEBAR AND ATTACH TO MENU OPEN
            \$('.ui.sidebar')
                .sidebar('attach events', '.toc.item')
            ;
            
            // PROJECT DIMMER
            \$('.ui.project.fluid.image')
                .dimmer({
                    on: 'hover'
                })
            ;    
        })
    ;
</script>
";
        // line 364
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/eks/themes/goeroe-semantic-october/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 364,  408 => 365,  406 => 364,  393 => 354,  189 => 153,  182 => 149,  175 => 145,  168 => 141,  105 => 81,  99 => 77,  97 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put styles %}
<style>
    .hidden.menu {
        display: none;
    }
    
    .masthead.segment {
        min-height: 700px;
        padding: 1em 0em;
    }

    .masthead .ui.menu .ui.button {
        margin-left: 0.5em;
    }
    
    .masthead h1.ui.header {
        margin-top: 3em;
        margin-bottom: 0em;
        font-size: 4em;
        font-weight: bold;
        
        text-shadow: 0px 0px 4px rgba(0, 0, 0, 0);
        color: rgba(255, 255, 255, 1);
    }
    .masthead h2 {
        font-size: 1.7em;
        font-weight: normal;
    }
    
    .masthead .start.button {
        margin-top: 1em;
    }
    
    .footer.segment {
        padding: 5em 0em;
    }
    
    .secondary.pointing.menu .toc.item {
        display: none;
    }
    
    .ui.icon.header {
        margin: 2em 0em;
    }
    
    @media only screen and (max-width: 700px) {
        .ui.fixed.menu {
            display: none !important;
        }
        
        .secondary.pointing.menu .item,
        secondary.pointing.menu .menu {
            display: none;
        }
        .secondary.pointing.menu .toc.item {
            display: block;
        }
        
        .masthead.segment {
            min-height: 350px;
        }
        .masthead h1.ui.header {
            font-size: 2em;
            margin-top: 1.5em;
        }
        .masthead h2 {
            margin-top: 0.5em;
            font-size: 1.5em;
        }
        
        .masthead .start.button {
            margin-top: 0.5em;
        }
    }
</style>
{% endput %}
<!-- FOLLOWING MENU -->
<div class=\"ui large top fixed hidden menu\">
    <div class=\"ui container\">
        <div href=\"#\" class=\"header item\">
            <img class=\"logo\" src=\"{{ 'assets/images/semantic-october.png'|theme }}\">
        </div>
        <a class=\"active item\">Home</a>
        <a class=\"item\">Services</a>
        <a class=\"item\">Portfolio</a>
        <a class=\"item\">Customers</a>
        <div class=\"right menu\">
            <div class=\"item\">
                <a class=\"ui orange button\">Contact us</a>
            </div>
        </div>
    </div>
</div>

<!-- SIDEBAR MENU -->
<div class=\"ui vertical inverted sidebar menu\">
    <a class=\"active item\">Home</a>
    <a class=\"item\">Services</a>
    <a class=\"item\">Portfolio</a>
    <a class=\"item\">Customers</a>
    <a class=\"item\">Contact us</a>
</div>

<!-- PAGE CONTENT -->
<div class=\"pusher\">
    <div class=\"ui inverted vertical masthead center aligned segment\">
        <div class=\"ui container\">
            <div class=\"ui large secondary inverted pointing menu\">
                <a class=\"toc item\">
                    <i class=\"sidebar icon\"></i>
                </a>
                <a class=\"active item\">Home</a>
                <a class=\"item\">Services</a>
                <a class=\"item\">Portfolio</a>
                <a class=\"item\">Customers</a>
                <div class=\"right item\">
                    <a class=\"ui inverted button\">Contact us</a>
                </div>
            </div>
        </div>
        <div class=\"ui text container\">
            <h1 class=\"ui inverted header\">
                Semantic October
            </h1>
            <h2>A Semantic UI theme for OctoberCMS.</h2>
            <div class=\"ui huge orange start button\">Get started <i class=\"right arrow icon\"></i></div>
        </div>
    </div>
    <div class=\"ui container\">
        <div class=\"ui center aligned basic segment\">
            <h1 class=\"ui icon header\">
                <i class=\"lightning icon\"></i>
                <div class=\"content\">
                    Services
                    <div class=\"sub header\">We provide services. Check some of them out here.</div>
                </div>
            </h1>
            <div class=\"ui grid\">
                <div class=\"stackable doubling four column row\">
                    <div class=\"column\">
                        <img class=\"ui centered small image\" src=\"{{ 'assets/images/services/CONSULTING.png'|theme }}\">
                        <h2 class=\"center aligned header\">Consulting</h2>
                    </div>
                    <div class=\"column\">
                        <img class=\"ui centered small image\" src=\"{{ 'assets/images/services/WEB.png'|theme }}\">
                        <h2 class=\"center aligned header\">Web</h2>
                    </div>
                    <div class=\"column\">
                        <img class=\"ui centered small image\" src=\"{{ 'assets/images/services/PRINT.png'|theme }}\">
                        <h2 class=\"center aligned header\">Print</h2>
                    </div>
                    <div class=\"column\">
                        <img class=\"ui centered small image\" src=\"{{ 'assets/images/services/PHOTOGRAPHY.png'|theme }}\">
                        <h2 class=\"center aligned header\">Photography</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"ui section divider\"></div>
        <div class=\"ui center aligned basic segment\">
            <h1 class=\"ui icon header\">
                <i class=\"lab icon\"></i>
                <div class=\"content\">
                    Projects
                    <div class=\"sub header\">We do projects. Check some of them out here.</div>
                </div>
            </h1>
            <div class=\"ui grid\">
                <div class=\"stackable doubling four column row\">
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/1\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/2\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/3\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/4\">
                        </div>
                    </div>
                </div>
                <div class=\"stackable doubling four column row\">
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/5\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/6\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/7\">
                        </div>
                    </div>
                    <div class=\"column\">
                        <div class=\"ui project fluid image\">
                            <div class=\"ui dimmer\">
                                <div class=\"content\">
                                    <div class=\"center\">
                                        <div class=\"ui small button\">View Project</div>
                                    </div>
                                </div>
                            </div>
                            <img class=\"ui fluid image\" src=\"http://lorempixel.com/640/480/abstract/8\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class=\"ui section divider\"></div>
        <div class=\"ui center aligned basic segment\">
            <h1 class=\"ui icon header\">
                <i class=\"users icon\"></i>
                <div class=\"content\">
                    Customers
                    <div class=\"sub header\">We have customers. Check some of them out here.</div>
                </div>
            </h1>
            <div class=\"ui grid\">
                <div class=\"stackable doubling four column row\">
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2010/04/babelfish-legal/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2010/04/bf_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2010/03/top-spice/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2010/03/top_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2009/01/wem/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2009/01/waterm_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2014/07/black-fox/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2014/01/Black_fox_m.jpg\"></a>
                    </div>
                </div>
                <div class=\"stackable doubling four column row\">
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2012/04/boundary/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2012/04/boundry_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2012/01/mountain/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2012/01/mountain_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2013/02/coworker/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2013/02/co_m.jpg\"></a>
                    </div>
                    <div class=\"column\">
                        <a href=\"http://logofaves.com/2009/04/pencil/\"><img class=\"ui fluid image\" src=\"http://logofaves.com/wp-content/uploads/2009/04/pencil_m.jpg\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"ui inverted vertical footer segment\">
        <div class=\"ui center aligned container\">
            <div class=\"ui stackable inverted divided grid\">
                <div class=\"four wide column\">
                    <h4 class=\"ui inverted header\">Link Group 1</h4>
                    <div class=\"ui inverted link list\">
                        <a href=\"#\" class=\"item\">Link One</a>
                        <a href=\"#\" class=\"item\">Link Two</a>
                        <a href=\"#\" class=\"item\">Link Three</a>
                        <a href=\"#\" class=\"item\">Link One</a>
                    </div>
                </div>
                <div class=\"four wide column\">
                    <h4 class=\"ui inverted header\">Link Group 2</h4>
                    <div class=\"ui inverted link list\">
                        <a href=\"#\" class=\"item\">Link One</a>
                        <a href=\"#\" class=\"item\">Link Two</a>
                        <a href=\"#\" class=\"item\">Link Three</a>
                        <a href=\"#\" class=\"item\">Link One</a>
                    </div>
                </div>
                <div class=\"four wide column\">
                    <h4 class=\"ui inverted header\">Link Group 3</h4>
                    <div class=\"ui inverted link list\">
                        <a href=\"#\" class=\"item\">Link One</a>
                        <a href=\"#\" class=\"item\">Link Two</a>
                        <a href=\"#\" class=\"item\">Link Three</a>
                        <a href=\"#\" class=\"item\">Link One</a>
                    </div>
                </div>
                <div class=\"four wide column\">
                    <h4 class=\"ui inverted header\">Link Group 4</h4>
                    <div class=\"ui inverted link list\">
                        <a href=\"#\" class=\"item\">Link One</a>
                        <a href=\"#\" class=\"item\">Link Two</a>
                        <a href=\"#\" class=\"item\">Link Three</a>
                        <a href=\"#\" class=\"item\">Link One</a>
                    </div>
                </div>
                
            </div>
            <div class=\"ui inverted section divider\"></div>
            <img src=\"{{ 'assets/images/semantic-october.png'|theme }}\" class=\"ui centered mini image\">
            <div class=\"ui horizontal inverted small divided link list\">
                <a class=\"item\" href=\"#\">Site Map</a>
                <a class=\"item\" href=\"#\">Contact Us</a>
                <a class=\"item\" href=\"#\">Terms</a>
                <a class=\"item\" href=\"#\">Privacy Policy</a>
            </div>
        </div>
    </div>
</div>
{% put scripts %}
<script>
    \$(document)
        .ready(function() {
            
            // FIX MENU WHEN PASSED
            \$('.masthead')
                .visibility({
                    once: false,
                    onBottomPassed: function() {
                        \$('.fixed.menu').transition('fade in');
                    },
                    onBottomPassedReverse: function() {
                        \$('.fixed.menu').transition('fade out');
                    }
                })
            ;
            
            // CREATE SIDEBAR AND ATTACH TO MENU OPEN
            \$('.ui.sidebar')
                .sidebar('attach events', '.toc.item')
            ;
            
            // PROJECT DIMMER
            \$('.ui.project.fluid.image')
                .dimmer({
                    on: 'hover'
                })
            ;    
        })
    ;
</script>
{% endput %}", "/Applications/AMPPS/www/eks/themes/goeroe-semantic-october/pages/home.htm", "");
    }
}
