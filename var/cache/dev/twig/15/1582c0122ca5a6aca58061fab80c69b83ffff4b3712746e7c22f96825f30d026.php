<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_d47236d6d4464c799757a143c74897795f4d3b028c15869a6953a61a89cf5e1d extends Twig_Template
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
        $__internal_422d09c35ce93504783350a200a1ae4e78582eca62d409f34f8fd0fe640ad935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422d09c35ce93504783350a200a1ae4e78582eca62d409f34f8fd0fe640ad935->enter($__internal_422d09c35ce93504783350a200a1ae4e78582eca62d409f34f8fd0fe640ad935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2f5ee98fb182cbe1b6d554849c5fa812a16b50415aef614cd25acb18950c6528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5ee98fb182cbe1b6d554849c5fa812a16b50415aef614cd25acb18950c6528->enter($__internal_2f5ee98fb182cbe1b6d554849c5fa812a16b50415aef614cd25acb18950c6528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_422d09c35ce93504783350a200a1ae4e78582eca62d409f34f8fd0fe640ad935->leave($__internal_422d09c35ce93504783350a200a1ae4e78582eca62d409f34f8fd0fe640ad935_prof);

        
        $__internal_2f5ee98fb182cbe1b6d554849c5fa812a16b50415aef614cd25acb18950c6528->leave($__internal_2f5ee98fb182cbe1b6d554849c5fa812a16b50415aef614cd25acb18950c6528_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
