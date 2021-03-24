<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* missions/editMission.html.twig */
class __TwigTemplate_1b5511dc198c6bf82a31701c682bcd906f166da1f55de8b79d99b03d20fd07cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "missions/editMission.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Edit a mission
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->loadTemplate("_header.html.twig", "missions/editMission.html.twig", 8)->display($context);
        // line 9
        echo "
    <h1 class=\"p-2 mt-4\">Editing the mission \"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "\" : <span style=\"font-size: 0.8em; font-weight: 300\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "startDate", [], "any", false, false, false, 10), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mission"] ?? null), "endDate", [], "any", false, false, false, 10), "html", null, true);
        echo "</span> </h1>

    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

    <button class=\"btn btn-success m-3\" type=\"submit\">Send</button>

    ";
        // line 17
        $this->loadTemplate("_cancelBtn.html.twig", "missions/editMission.html.twig", 17)->display($context);
        // line 18
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "missions/editMission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  86 => 17,  79 => 13,  75 => 12,  66 => 10,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "missions/editMission.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/missions/editMission.html.twig");
    }
}
