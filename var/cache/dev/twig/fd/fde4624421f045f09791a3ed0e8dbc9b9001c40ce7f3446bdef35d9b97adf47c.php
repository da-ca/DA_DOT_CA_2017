<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_9a458b2e4e42c2690d5583f113f366dee890b29e562e69aa88b72afc9d299359 extends Twig_Template
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
        $__internal_23c9329e8f07f9be4036b2d662c0b20d06ae1f092fa06b35bee906ddd968e0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c9329e8f07f9be4036b2d662c0b20d06ae1f092fa06b35bee906ddd968e0c4->enter($__internal_23c9329e8f07f9be4036b2d662c0b20d06ae1f092fa06b35bee906ddd968e0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_6e4be0f911a83dda52764de7286c01c25141cad5c2670d06d1edbc43fea241af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4be0f911a83dda52764de7286c01c25141cad5c2670d06d1edbc43fea241af->enter($__internal_6e4be0f911a83dda52764de7286c01c25141cad5c2670d06d1edbc43fea241af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_23c9329e8f07f9be4036b2d662c0b20d06ae1f092fa06b35bee906ddd968e0c4->leave($__internal_23c9329e8f07f9be4036b2d662c0b20d06ae1f092fa06b35bee906ddd968e0c4_prof);

        
        $__internal_6e4be0f911a83dda52764de7286c01c25141cad5c2670d06d1edbc43fea241af->leave($__internal_6e4be0f911a83dda52764de7286c01c25141cad5c2670d06d1edbc43fea241af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
