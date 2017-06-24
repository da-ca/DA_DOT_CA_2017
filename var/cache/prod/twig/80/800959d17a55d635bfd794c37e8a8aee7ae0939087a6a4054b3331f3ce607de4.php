<?php

/* ::base.html.twig */
class __TwigTemplate_eede829a2fbd7e81202c668851758596a67be503cd6031653ab29f84d0ef156b extends Twig_Template
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

    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        
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

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 45,  99 => 12,  94 => 6,  88 => 5,  82 => 46,  80 => 45,  46 => 13,  44 => 12,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/app/Resources/views/base.html.twig");
    }
}
