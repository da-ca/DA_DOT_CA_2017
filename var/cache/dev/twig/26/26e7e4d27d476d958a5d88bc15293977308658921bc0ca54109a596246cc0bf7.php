<?php

/* base.html.twig */
class __TwigTemplate_dcbea8fed6ada303a8c0d3a0eb6469c0d7cce1bcd07b46b6602bc0198cd03314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba71a8937772f948fedd6b8966ee80328def2740a7ec6ddb1f2dc41612778017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba71a8937772f948fedd6b8966ee80328def2740a7ec6ddb1f2dc41612778017->enter($__internal_ba71a8937772f948fedd6b8966ee80328def2740a7ec6ddb1f2dc41612778017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_99941ba382cf972c5ee6ea697809e13ceb66a758ca7297df1324403c489c6924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99941ba382cf972c5ee6ea697809e13ceb66a758ca7297df1324403c489c6924->enter($__internal_99941ba382cf972c5ee6ea697809e13ceb66a758ca7297df1324403c489c6924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <script src=\"js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>

        <!-- Google fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700|Cookie\" rel=\"stylesheet\" type=\"text/css\">
        
        <!-- Preloader stylesheet -->
        <link rel=\"stylesheet\" href=\"css/preloader.css\">\t\t
        
        <!-- RS5.0 Main stylesheet -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"revolution/css/settings.css\">\t\t 
        <!-- RS5.0 navigation styles -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"revolution/css/navigation.css\">
        
        <!-- Bootstrap v3.3.6 stylesheet -->
        <link rel=\"stylesheet\" href=\"css/bootstrap.css\">
        
        <!-- Portfolio stylesheet -->
        <link rel=\"stylesheet\" href=\"portfolio/css/portfolio.css\">
        
        <!-- UX theme stylesheet -->
        <link rel=\"stylesheet\" href=\"css/theme.css\">


        

        <!-- javascript/jQuery files are linked here -->
        <script src=\"js/vendor/jquery.js\"></script>
        <script src=\"js/vendor/bootstrap.js\"></script>
        <script src=\"js/hover-dropdown.js\"></script>
        <script src=\"js/smooth-scroll.js\"></script>
        <script src=\"js/appear.js\"></script>
        <script src=\"js/retina.js\"></script>
        <script src=\"js/parallax.js\"></script>
        <script src=\"js/scrollbar.js\"></script>
        <script src=\"js/classie.js\"></script>
        <script src=\"js/selectik.js\"></script>
        <script src=\"js/icheck.js\"></script>
        <script src=\"js/spinedit.js\"></script>
        <script src=\"js/ux-field.js\"></script>
        <script src=\"js/carousel.js\"></script>
        <script src=\"js/popup.js\"></script>
        <script src=\"js/ajaxchimp.js\"></script>
        <script src=\"js/tabs.js\"></script>
        <script src=\"revolution/js/jquery.themepunch.tools.min.js?rev=5.0\"></script>
        <script src=\"revolution/js/jquery.themepunch.revolution.min.js?rev=5.0\"></script>
        <script src=\"portfolio/js/portfolio.js\"></script>
        <script src=\"js/vide.js\"></script>
        <script src=\"js/jflickrfeed.js\"></script>
        <script src=\"js/tweecool.js\"></script>
        <script src=\"js/fitvids.js\"></script>
        <script src=\"js/form.js\"></script>
        <script src=\"js/contact.js\"></script>
        <script src=\"js/validate.js\"></script>
        <script src=\"js/chart.js\"></script>
        <script src=\"js/main.js\"></script>

    </head>
    <body>
        ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "        
            

        ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "    </body>
</html>
";
        
        $__internal_ba71a8937772f948fedd6b8966ee80328def2740a7ec6ddb1f2dc41612778017->leave($__internal_ba71a8937772f948fedd6b8966ee80328def2740a7ec6ddb1f2dc41612778017_prof);

        
        $__internal_99941ba382cf972c5ee6ea697809e13ceb66a758ca7297df1324403c489c6924->leave($__internal_99941ba382cf972c5ee6ea697809e13ceb66a758ca7297df1324403c489c6924_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_648eaeaa89f84930f7772c352c4d686f46a78d07022f49f283d0cbe39e8f2302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648eaeaa89f84930f7772c352c4d686f46a78d07022f49f283d0cbe39e8f2302->enter($__internal_648eaeaa89f84930f7772c352c4d686f46a78d07022f49f283d0cbe39e8f2302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5afbaec83a0b5fd6ce92422ed10c2092cc54cc340802123da23e0feeafebeb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afbaec83a0b5fd6ce92422ed10c2092cc54cc340802123da23e0feeafebeb96->enter($__internal_5afbaec83a0b5fd6ce92422ed10c2092cc54cc340802123da23e0feeafebeb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5afbaec83a0b5fd6ce92422ed10c2092cc54cc340802123da23e0feeafebeb96->leave($__internal_5afbaec83a0b5fd6ce92422ed10c2092cc54cc340802123da23e0feeafebeb96_prof);

        
        $__internal_648eaeaa89f84930f7772c352c4d686f46a78d07022f49f283d0cbe39e8f2302->leave($__internal_648eaeaa89f84930f7772c352c4d686f46a78d07022f49f283d0cbe39e8f2302_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cab5bd6a2607e42c6c93ea3c6a2992822080ac7d8fcec80adf3912b20a26872d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab5bd6a2607e42c6c93ea3c6a2992822080ac7d8fcec80adf3912b20a26872d->enter($__internal_cab5bd6a2607e42c6c93ea3c6a2992822080ac7d8fcec80adf3912b20a26872d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b1ff11c610b72a0ad40e6d681eeae21d0efdf519db7e4665b23064a99595c6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ff11c610b72a0ad40e6d681eeae21d0efdf519db7e4665b23064a99595c6ad->enter($__internal_b1ff11c610b72a0ad40e6d681eeae21d0efdf519db7e4665b23064a99595c6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b1ff11c610b72a0ad40e6d681eeae21d0efdf519db7e4665b23064a99595c6ad->leave($__internal_b1ff11c610b72a0ad40e6d681eeae21d0efdf519db7e4665b23064a99595c6ad_prof);

        
        $__internal_cab5bd6a2607e42c6c93ea3c6a2992822080ac7d8fcec80adf3912b20a26872d->leave($__internal_cab5bd6a2607e42c6c93ea3c6a2992822080ac7d8fcec80adf3912b20a26872d_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4ebb20dec99938075e559c08448a34a6623f7a20d1d8ded7257a92c13224bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ebb20dec99938075e559c08448a34a6623f7a20d1d8ded7257a92c13224bf7->enter($__internal_a4ebb20dec99938075e559c08448a34a6623f7a20d1d8ded7257a92c13224bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca9af03a27ddbb0c40ce343aa789c5144408effa5d0e5e73f5e13f73486b6362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9af03a27ddbb0c40ce343aa789c5144408effa5d0e5e73f5e13f73486b6362->enter($__internal_ca9af03a27ddbb0c40ce343aa789c5144408effa5d0e5e73f5e13f73486b6362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca9af03a27ddbb0c40ce343aa789c5144408effa5d0e5e73f5e13f73486b6362->leave($__internal_ca9af03a27ddbb0c40ce343aa789c5144408effa5d0e5e73f5e13f73486b6362_prof);

        
        $__internal_a4ebb20dec99938075e559c08448a34a6623f7a20d1d8ded7257a92c13224bf7->leave($__internal_a4ebb20dec99938075e559c08448a34a6623f7a20d1d8ded7257a92c13224bf7_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26b972cc8cfdb36764af3e1d88f53208bc5d2f63020f0154b5ff581d26e400c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b972cc8cfdb36764af3e1d88f53208bc5d2f63020f0154b5ff581d26e400c6->enter($__internal_26b972cc8cfdb36764af3e1d88f53208bc5d2f63020f0154b5ff581d26e400c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ed69312d4dcc4739b6efc4e3fc803357696c95bfff2b8683dc5487f27ff9165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed69312d4dcc4739b6efc4e3fc803357696c95bfff2b8683dc5487f27ff9165->enter($__internal_6ed69312d4dcc4739b6efc4e3fc803357696c95bfff2b8683dc5487f27ff9165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6ed69312d4dcc4739b6efc4e3fc803357696c95bfff2b8683dc5487f27ff9165->leave($__internal_6ed69312d4dcc4739b6efc4e3fc803357696c95bfff2b8683dc5487f27ff9165_prof);

        
        $__internal_26b972cc8cfdb36764af3e1d88f53208bc5d2f63020f0154b5ff581d26e400c6->leave($__internal_26b972cc8cfdb36764af3e1d88f53208bc5d2f63020f0154b5ff581d26e400c6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 71,  161 => 67,  144 => 6,  126 => 5,  114 => 72,  112 => 71,  107 => 68,  105 => 67,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <script src=\"js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>

        <!-- Google fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700|Cookie\" rel=\"stylesheet\" type=\"text/css\">
        
        <!-- Preloader stylesheet -->
        <link rel=\"stylesheet\" href=\"css/preloader.css\">\t\t
        
        <!-- RS5.0 Main stylesheet -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"revolution/css/settings.css\">\t\t 
        <!-- RS5.0 navigation styles -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"revolution/css/navigation.css\">
        
        <!-- Bootstrap v3.3.6 stylesheet -->
        <link rel=\"stylesheet\" href=\"css/bootstrap.css\">
        
        <!-- Portfolio stylesheet -->
        <link rel=\"stylesheet\" href=\"portfolio/css/portfolio.css\">
        
        <!-- UX theme stylesheet -->
        <link rel=\"stylesheet\" href=\"css/theme.css\">


        

        <!-- javascript/jQuery files are linked here -->
        <script src=\"js/vendor/jquery.js\"></script>
        <script src=\"js/vendor/bootstrap.js\"></script>
        <script src=\"js/hover-dropdown.js\"></script>
        <script src=\"js/smooth-scroll.js\"></script>
        <script src=\"js/appear.js\"></script>
        <script src=\"js/retina.js\"></script>
        <script src=\"js/parallax.js\"></script>
        <script src=\"js/scrollbar.js\"></script>
        <script src=\"js/classie.js\"></script>
        <script src=\"js/selectik.js\"></script>
        <script src=\"js/icheck.js\"></script>
        <script src=\"js/spinedit.js\"></script>
        <script src=\"js/ux-field.js\"></script>
        <script src=\"js/carousel.js\"></script>
        <script src=\"js/popup.js\"></script>
        <script src=\"js/ajaxchimp.js\"></script>
        <script src=\"js/tabs.js\"></script>
        <script src=\"revolution/js/jquery.themepunch.tools.min.js?rev=5.0\"></script>
        <script src=\"revolution/js/jquery.themepunch.revolution.min.js?rev=5.0\"></script>
        <script src=\"portfolio/js/portfolio.js\"></script>
        <script src=\"js/vide.js\"></script>
        <script src=\"js/jflickrfeed.js\"></script>
        <script src=\"js/tweecool.js\"></script>
        <script src=\"js/fitvids.js\"></script>
        <script src=\"js/form.js\"></script>
        <script src=\"js/contact.js\"></script>
        <script src=\"js/validate.js\"></script>
        <script src=\"js/chart.js\"></script>
        <script src=\"js/main.js\"></script>

    </head>
    <body>
        {% block body %}{% endblock %}
        
            

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/app/Resources/views/base.html.twig");
    }
}
