<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1eac6d90ee66b4a75c858cab6c5a2a2ac1eded63800259782b8e16d9c4c1b6ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e062cef1fe45afc1f08cc27ece6d570cd5d0edb11255f010da0e01886c3e7598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e062cef1fe45afc1f08cc27ece6d570cd5d0edb11255f010da0e01886c3e7598->enter($__internal_e062cef1fe45afc1f08cc27ece6d570cd5d0edb11255f010da0e01886c3e7598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0d50cf37e6b20bfb6b1d4cba9853124505c2ffd1ab004afec6b249c3a4d17c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d50cf37e6b20bfb6b1d4cba9853124505c2ffd1ab004afec6b249c3a4d17c8e->enter($__internal_0d50cf37e6b20bfb6b1d4cba9853124505c2ffd1ab004afec6b249c3a4d17c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e062cef1fe45afc1f08cc27ece6d570cd5d0edb11255f010da0e01886c3e7598->leave($__internal_e062cef1fe45afc1f08cc27ece6d570cd5d0edb11255f010da0e01886c3e7598_prof);

        
        $__internal_0d50cf37e6b20bfb6b1d4cba9853124505c2ffd1ab004afec6b249c3a4d17c8e->leave($__internal_0d50cf37e6b20bfb6b1d4cba9853124505c2ffd1ab004afec6b249c3a4d17c8e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ed6426b3f5d6702e16a89f874b8b11099356ed5a6fde81459c6ec3756866ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed6426b3f5d6702e16a89f874b8b11099356ed5a6fde81459c6ec3756866ac3->enter($__internal_1ed6426b3f5d6702e16a89f874b8b11099356ed5a6fde81459c6ec3756866ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6fd7ce6da19bd1d15af2bf0c9ec7385eb1272ee72d3601f2c6daf15c28bc3039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd7ce6da19bd1d15af2bf0c9ec7385eb1272ee72d3601f2c6daf15c28bc3039->enter($__internal_6fd7ce6da19bd1d15af2bf0c9ec7385eb1272ee72d3601f2c6daf15c28bc3039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6fd7ce6da19bd1d15af2bf0c9ec7385eb1272ee72d3601f2c6daf15c28bc3039->leave($__internal_6fd7ce6da19bd1d15af2bf0c9ec7385eb1272ee72d3601f2c6daf15c28bc3039_prof);

        
        $__internal_1ed6426b3f5d6702e16a89f874b8b11099356ed5a6fde81459c6ec3756866ac3->leave($__internal_1ed6426b3f5d6702e16a89f874b8b11099356ed5a6fde81459c6ec3756866ac3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
