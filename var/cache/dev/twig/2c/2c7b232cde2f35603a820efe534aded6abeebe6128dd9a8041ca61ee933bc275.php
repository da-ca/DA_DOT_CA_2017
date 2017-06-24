<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cdf39e461321171a3192b5dcb70b6bb53bc2c463d38352f38812b5fd4bbb0bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b74964614934dad3e10433982c2a2596effa10f6155136ebe453451ec266ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b74964614934dad3e10433982c2a2596effa10f6155136ebe453451ec266ede->enter($__internal_3b74964614934dad3e10433982c2a2596effa10f6155136ebe453451ec266ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d7f4cff054cddf72823ade563b933e18ddcaf960d45c7c0f63e888a62f400cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f4cff054cddf72823ade563b933e18ddcaf960d45c7c0f63e888a62f400cbf->enter($__internal_d7f4cff054cddf72823ade563b933e18ddcaf960d45c7c0f63e888a62f400cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b74964614934dad3e10433982c2a2596effa10f6155136ebe453451ec266ede->leave($__internal_3b74964614934dad3e10433982c2a2596effa10f6155136ebe453451ec266ede_prof);

        
        $__internal_d7f4cff054cddf72823ade563b933e18ddcaf960d45c7c0f63e888a62f400cbf->leave($__internal_d7f4cff054cddf72823ade563b933e18ddcaf960d45c7c0f63e888a62f400cbf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba97c8fda4980f3d529778d19da2b69845b436f9cf05231ce357ac4864633a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba97c8fda4980f3d529778d19da2b69845b436f9cf05231ce357ac4864633a58->enter($__internal_ba97c8fda4980f3d529778d19da2b69845b436f9cf05231ce357ac4864633a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa44f10c3f172506870be120d1cc459eb76eddb9523287e875ece181a2900abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa44f10c3f172506870be120d1cc459eb76eddb9523287e875ece181a2900abf->enter($__internal_fa44f10c3f172506870be120d1cc459eb76eddb9523287e875ece181a2900abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fa44f10c3f172506870be120d1cc459eb76eddb9523287e875ece181a2900abf->leave($__internal_fa44f10c3f172506870be120d1cc459eb76eddb9523287e875ece181a2900abf_prof);

        
        $__internal_ba97c8fda4980f3d529778d19da2b69845b436f9cf05231ce357ac4864633a58->leave($__internal_ba97c8fda4980f3d529778d19da2b69845b436f9cf05231ce357ac4864633a58_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d396c6ca9e71038fc015132ce3305c850faeb169cd6c950f0fd82b625b5f969d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d396c6ca9e71038fc015132ce3305c850faeb169cd6c950f0fd82b625b5f969d->enter($__internal_d396c6ca9e71038fc015132ce3305c850faeb169cd6c950f0fd82b625b5f969d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d22545038a0c2f402a0aeccad3c5c47e6f3107052866d5e563422943adfcd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d22545038a0c2f402a0aeccad3c5c47e6f3107052866d5e563422943adfcd67->enter($__internal_1d22545038a0c2f402a0aeccad3c5c47e6f3107052866d5e563422943adfcd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1d22545038a0c2f402a0aeccad3c5c47e6f3107052866d5e563422943adfcd67->leave($__internal_1d22545038a0c2f402a0aeccad3c5c47e6f3107052866d5e563422943adfcd67_prof);

        
        $__internal_d396c6ca9e71038fc015132ce3305c850faeb169cd6c950f0fd82b625b5f969d->leave($__internal_d396c6ca9e71038fc015132ce3305c850faeb169cd6c950f0fd82b625b5f969d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
