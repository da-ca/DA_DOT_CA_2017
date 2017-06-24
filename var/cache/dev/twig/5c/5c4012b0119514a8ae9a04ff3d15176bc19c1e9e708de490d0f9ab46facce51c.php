<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d65e5979dfcb2df79a9688ac2621435881546d8e473dfeeadd9653a8406eeb49 extends Twig_Template
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
        $__internal_28afaf197f3992a45fa1c2a4d88b7043e088288d43ec9db249f7a4600896c45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28afaf197f3992a45fa1c2a4d88b7043e088288d43ec9db249f7a4600896c45b->enter($__internal_28afaf197f3992a45fa1c2a4d88b7043e088288d43ec9db249f7a4600896c45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0923d8741c0bc35adcab0724ba43a81479a95de8651285c16f19405b1cd72579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0923d8741c0bc35adcab0724ba43a81479a95de8651285c16f19405b1cd72579->enter($__internal_0923d8741c0bc35adcab0724ba43a81479a95de8651285c16f19405b1cd72579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_28afaf197f3992a45fa1c2a4d88b7043e088288d43ec9db249f7a4600896c45b->leave($__internal_28afaf197f3992a45fa1c2a4d88b7043e088288d43ec9db249f7a4600896c45b_prof);

        
        $__internal_0923d8741c0bc35adcab0724ba43a81479a95de8651285c16f19405b1cd72579->leave($__internal_0923d8741c0bc35adcab0724ba43a81479a95de8651285c16f19405b1cd72579_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
