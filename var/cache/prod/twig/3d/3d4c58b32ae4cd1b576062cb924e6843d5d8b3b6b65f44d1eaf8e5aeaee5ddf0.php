<?php

/* @videotheque/Default/base.html.twing */
class __TwigTemplate_9bfe9b6e1bbe9039187eff9113a067a0a6e0f0e57c92909b7279ce4260727fef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>Bootstrap, from Twitter</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/css/videotheque-spec.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style type=\"text/css\">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

    </style>
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  </head>

  <body>
    <div class=\"container-fluid\">
      <div class=\"row-fluid\">
        <div class=\"span3\">
          <div class=\"well sidebar-nav\">
            ";
        // line 33
        $this->displayBlock('sidebar', $context, $blocks);
        // line 34
        echo "          </div><!--/.well -->
        </div><!--/span sidebar-->

        <div class=\"span9\">
          <div class=\"hero-unit\">
            ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>© Iabsis 2015</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/iabsisvideotheque/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@videotheque/Default/base.html.twing";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 39,  152 => 33,  144 => 68,  140 => 67,  136 => 66,  132 => 65,  128 => 64,  124 => 63,  120 => 62,  116 => 61,  112 => 60,  108 => 59,  104 => 58,  100 => 57,  96 => 56,  78 => 40,  76 => 39,  69 => 34,  67 => 33,  55 => 24,  41 => 13,  37 => 12,  33 => 11,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <title>Bootstrap, from Twitter</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <!-- Le styles -->*/
/*     <link href="{{ asset('bundles/iabsisvideotheque/css/bootstrap.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/iabsisvideotheque/css/videotheque-spec.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/iabsisvideotheque/css/font-awesome.min.css') }}" rel="stylesheet">*/
/*     <style type="text/css">*/
/*       body {*/
/*         padding-top: 60px;*/
/*         padding-bottom: 40px;*/
/*       }*/
/*       .sidebar-nav {*/
/*         padding: 9px 0;*/
/*       }*/
/* */
/*     </style>*/
/*     <link href="{{ asset('bundles/iabsisvideotheque/css/bootstrap-responsive.css') }}" rel="stylesheet">*/
/* */
/*   </head>*/
/* */
/*   <body>*/
/*     <div class="container-fluid">*/
/*       <div class="row-fluid">*/
/*         <div class="span3">*/
/*           <div class="well sidebar-nav">*/
/*             {% block sidebar %}{% endblock %}*/
/*           </div><!--/.well -->*/
/*         </div><!--/span sidebar-->*/
/* */
/*         <div class="span9">*/
/*           <div class="hero-unit">*/
/*             {% block body %}{% endblock %}*/
/* */
/*           </div>*/
/*         </div><!--/span-->*/
/*       </div><!--/row-->*/
/* */
/*       <hr>*/
/* */
/*       <footer>*/
/*         <p>© Iabsis 2015</p>*/
/*       </footer>*/
/* */
/*     </div><!--/.fluid-container-->*/
/* */
/*     <!-- Le javascript*/
/*     ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/jquery.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-transition.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-alert.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-modal.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-dropdown.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-scrollspy.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-tab.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-tooltip.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-popover.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-button.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-collapse.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-carousel.js') }}"></script>*/
/*     <script src="{{ asset('bundles/iabsisvideotheque/js/bootstrap-typeahead.js') }}"></script>*/
/* */
/*   </body>*/
/* </html>*/
