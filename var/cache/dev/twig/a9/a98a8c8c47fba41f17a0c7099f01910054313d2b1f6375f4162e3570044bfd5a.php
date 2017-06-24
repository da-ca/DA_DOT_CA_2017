<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3ba7a2aad6189688ad7334a28ad9f743bfa309de6207b0983bb01983acc3dd28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c0937d365d2ccb181409a16cb092eed879204ac1ac9962aa10f16e9c3ec1e1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0937d365d2ccb181409a16cb092eed879204ac1ac9962aa10f16e9c3ec1e1ee->enter($__internal_c0937d365d2ccb181409a16cb092eed879204ac1ac9962aa10f16e9c3ec1e1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4a2d62942e4d2d5573a30702f6e4efc1834b442c8be0d5ca92e9aeb0446b2be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2d62942e4d2d5573a30702f6e4efc1834b442c8be0d5ca92e9aeb0446b2be2->enter($__internal_4a2d62942e4d2d5573a30702f6e4efc1834b442c8be0d5ca92e9aeb0446b2be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0937d365d2ccb181409a16cb092eed879204ac1ac9962aa10f16e9c3ec1e1ee->leave($__internal_c0937d365d2ccb181409a16cb092eed879204ac1ac9962aa10f16e9c3ec1e1ee_prof);

        
        $__internal_4a2d62942e4d2d5573a30702f6e4efc1834b442c8be0d5ca92e9aeb0446b2be2->leave($__internal_4a2d62942e4d2d5573a30702f6e4efc1834b442c8be0d5ca92e9aeb0446b2be2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e711a4e0cb3874b28af9e5bb7cc4a074e6634f087decbb5b3fb3ca82c15b8095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e711a4e0cb3874b28af9e5bb7cc4a074e6634f087decbb5b3fb3ca82c15b8095->enter($__internal_e711a4e0cb3874b28af9e5bb7cc4a074e6634f087decbb5b3fb3ca82c15b8095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e9630884337d51198ced68f5936524eab90feeada7df569e5cb90dbd0fc4c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9630884337d51198ced68f5936524eab90feeada7df569e5cb90dbd0fc4c50->enter($__internal_3e9630884337d51198ced68f5936524eab90feeada7df569e5cb90dbd0fc4c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3e9630884337d51198ced68f5936524eab90feeada7df569e5cb90dbd0fc4c50->leave($__internal_3e9630884337d51198ced68f5936524eab90feeada7df569e5cb90dbd0fc4c50_prof);

        
        $__internal_e711a4e0cb3874b28af9e5bb7cc4a074e6634f087decbb5b3fb3ca82c15b8095->leave($__internal_e711a4e0cb3874b28af9e5bb7cc4a074e6634f087decbb5b3fb3ca82c15b8095_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_371685c8bdca9bfe76299eac769d3cc001eec68c4308877036baf9680336e9c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371685c8bdca9bfe76299eac769d3cc001eec68c4308877036baf9680336e9c2->enter($__internal_371685c8bdca9bfe76299eac769d3cc001eec68c4308877036baf9680336e9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b9c41a94fa6f418a3dd38c56e179283d0e74f7cb9f7efef86226c680d0658ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9c41a94fa6f418a3dd38c56e179283d0e74f7cb9f7efef86226c680d0658ca->enter($__internal_5b9c41a94fa6f418a3dd38c56e179283d0e74f7cb9f7efef86226c680d0658ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5b9c41a94fa6f418a3dd38c56e179283d0e74f7cb9f7efef86226c680d0658ca->leave($__internal_5b9c41a94fa6f418a3dd38c56e179283d0e74f7cb9f7efef86226c680d0658ca_prof);

        
        $__internal_371685c8bdca9bfe76299eac769d3cc001eec68c4308877036baf9680336e9c2->leave($__internal_371685c8bdca9bfe76299eac769d3cc001eec68c4308877036baf9680336e9c2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_056ccfe037fc5d47b1a5ddb28d4aa8cdc5bee0a2a674c64f07b3958bec44cd57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056ccfe037fc5d47b1a5ddb28d4aa8cdc5bee0a2a674c64f07b3958bec44cd57->enter($__internal_056ccfe037fc5d47b1a5ddb28d4aa8cdc5bee0a2a674c64f07b3958bec44cd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8d623083da7a4403743877e755892006d665a1c3010232e2b37c53a4b3fcf2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d623083da7a4403743877e755892006d665a1c3010232e2b37c53a4b3fcf2e9->enter($__internal_8d623083da7a4403743877e755892006d665a1c3010232e2b37c53a4b3fcf2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8d623083da7a4403743877e755892006d665a1c3010232e2b37c53a4b3fcf2e9->leave($__internal_8d623083da7a4403743877e755892006d665a1c3010232e2b37c53a4b3fcf2e9_prof);

        
        $__internal_056ccfe037fc5d47b1a5ddb28d4aa8cdc5bee0a2a674c64f07b3958bec44cd57->leave($__internal_056ccfe037fc5d47b1a5ddb28d4aa8cdc5bee0a2a674c64f07b3958bec44cd57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
