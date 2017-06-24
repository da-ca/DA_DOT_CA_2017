<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8f285173afabce12fb7b1cac9ff6cd9ffe84369adb7cf48c4fa74a55c2ac1fcb extends Twig_Template
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
        $__internal_8407400c504af39b1146898cb1bbec1b0af62adc62cdfc0fe6568d63b17c0971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8407400c504af39b1146898cb1bbec1b0af62adc62cdfc0fe6568d63b17c0971->enter($__internal_8407400c504af39b1146898cb1bbec1b0af62adc62cdfc0fe6568d63b17c0971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1aaca65a985ac6e64f80f61d4b7b5323671755ed061bee7b90f686091ce2824d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aaca65a985ac6e64f80f61d4b7b5323671755ed061bee7b90f686091ce2824d->enter($__internal_1aaca65a985ac6e64f80f61d4b7b5323671755ed061bee7b90f686091ce2824d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8407400c504af39b1146898cb1bbec1b0af62adc62cdfc0fe6568d63b17c0971->leave($__internal_8407400c504af39b1146898cb1bbec1b0af62adc62cdfc0fe6568d63b17c0971_prof);

        
        $__internal_1aaca65a985ac6e64f80f61d4b7b5323671755ed061bee7b90f686091ce2824d->leave($__internal_1aaca65a985ac6e64f80f61d4b7b5323671755ed061bee7b90f686091ce2824d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
