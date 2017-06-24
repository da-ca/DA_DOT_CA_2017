<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6257bc1f1c71eca992eb0570d62b7704f17ca6a6f7230b098c838f66e3dc4fe5 extends Twig_Template
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
        $__internal_584bc0bfb255f4612f66fc333070525c12c7a16dd6c76cb65ae85c8f9c5129f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584bc0bfb255f4612f66fc333070525c12c7a16dd6c76cb65ae85c8f9c5129f2->enter($__internal_584bc0bfb255f4612f66fc333070525c12c7a16dd6c76cb65ae85c8f9c5129f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f73e2653ad0470ffcb54cd2ae0101db245fee026a7015f0dd339383cd6c1e77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73e2653ad0470ffcb54cd2ae0101db245fee026a7015f0dd339383cd6c1e77c->enter($__internal_f73e2653ad0470ffcb54cd2ae0101db245fee026a7015f0dd339383cd6c1e77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_584bc0bfb255f4612f66fc333070525c12c7a16dd6c76cb65ae85c8f9c5129f2->leave($__internal_584bc0bfb255f4612f66fc333070525c12c7a16dd6c76cb65ae85c8f9c5129f2_prof);

        
        $__internal_f73e2653ad0470ffcb54cd2ae0101db245fee026a7015f0dd339383cd6c1e77c->leave($__internal_f73e2653ad0470ffcb54cd2ae0101db245fee026a7015f0dd339383cd6c1e77c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
