<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0b38740d75f9dae3cef02cd4041db998d23ef6015e649b64f348d98b0c38c175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87e831465d0f803810ea9b3820db68d4fd13bf806609bfb6f140648ab4aa83a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e831465d0f803810ea9b3820db68d4fd13bf806609bfb6f140648ab4aa83a6->enter($__internal_87e831465d0f803810ea9b3820db68d4fd13bf806609bfb6f140648ab4aa83a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2b3774b694994d6481b03f58bdcec507921866c273e76f815790b776065c34da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3774b694994d6481b03f58bdcec507921866c273e76f815790b776065c34da->enter($__internal_2b3774b694994d6481b03f58bdcec507921866c273e76f815790b776065c34da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87e831465d0f803810ea9b3820db68d4fd13bf806609bfb6f140648ab4aa83a6->leave($__internal_87e831465d0f803810ea9b3820db68d4fd13bf806609bfb6f140648ab4aa83a6_prof);

        
        $__internal_2b3774b694994d6481b03f58bdcec507921866c273e76f815790b776065c34da->leave($__internal_2b3774b694994d6481b03f58bdcec507921866c273e76f815790b776065c34da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61059f4136b26adaeab69068a078c801d8c0cb641572a3b86769e8900258cde3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61059f4136b26adaeab69068a078c801d8c0cb641572a3b86769e8900258cde3->enter($__internal_61059f4136b26adaeab69068a078c801d8c0cb641572a3b86769e8900258cde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_01949b25452734036def04d4f6b6114309ab802c91b8f73c07ff7bc1f5a0091b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01949b25452734036def04d4f6b6114309ab802c91b8f73c07ff7bc1f5a0091b->enter($__internal_01949b25452734036def04d4f6b6114309ab802c91b8f73c07ff7bc1f5a0091b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_01949b25452734036def04d4f6b6114309ab802c91b8f73c07ff7bc1f5a0091b->leave($__internal_01949b25452734036def04d4f6b6114309ab802c91b8f73c07ff7bc1f5a0091b_prof);

        
        $__internal_61059f4136b26adaeab69068a078c801d8c0cb641572a3b86769e8900258cde3->leave($__internal_61059f4136b26adaeab69068a078c801d8c0cb641572a3b86769e8900258cde3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_904137e49ed1baa4caadd48c651a055db07d972340035e6e08054383fd72db7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904137e49ed1baa4caadd48c651a055db07d972340035e6e08054383fd72db7a->enter($__internal_904137e49ed1baa4caadd48c651a055db07d972340035e6e08054383fd72db7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_77e948666a4b12c9c756b79128b10087cc66329f175c15c55a25db738408ebc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e948666a4b12c9c756b79128b10087cc66329f175c15c55a25db738408ebc6->enter($__internal_77e948666a4b12c9c756b79128b10087cc66329f175c15c55a25db738408ebc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77e948666a4b12c9c756b79128b10087cc66329f175c15c55a25db738408ebc6->leave($__internal_77e948666a4b12c9c756b79128b10087cc66329f175c15c55a25db738408ebc6_prof);

        
        $__internal_904137e49ed1baa4caadd48c651a055db07d972340035e6e08054383fd72db7a->leave($__internal_904137e49ed1baa4caadd48c651a055db07d972340035e6e08054383fd72db7a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7829e38d4e4f467edbf5f6ae95e6112561ec1a34937db5abd7bdf62729f49fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7829e38d4e4f467edbf5f6ae95e6112561ec1a34937db5abd7bdf62729f49fc7->enter($__internal_7829e38d4e4f467edbf5f6ae95e6112561ec1a34937db5abd7bdf62729f49fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a7360350df3b36ba995af2f58534d28250a61c46f78b535a19b8a8968289be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7360350df3b36ba995af2f58534d28250a61c46f78b535a19b8a8968289be3->enter($__internal_6a7360350df3b36ba995af2f58534d28250a61c46f78b535a19b8a8968289be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a7360350df3b36ba995af2f58534d28250a61c46f78b535a19b8a8968289be3->leave($__internal_6a7360350df3b36ba995af2f58534d28250a61c46f78b535a19b8a8968289be3_prof);

        
        $__internal_7829e38d4e4f467edbf5f6ae95e6112561ec1a34937db5abd7bdf62729f49fc7->leave($__internal_7829e38d4e4f467edbf5f6ae95e6112561ec1a34937db5abd7bdf62729f49fc7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
