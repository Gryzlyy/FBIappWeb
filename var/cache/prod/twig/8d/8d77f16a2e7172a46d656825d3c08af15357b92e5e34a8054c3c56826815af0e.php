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

/* agents/editAgent.html.twig */
class __TwigTemplate_86862669be5005d6dccfbc1b0c104b5cb10346d7d5c30a591a8c47242ddb6ca3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "agents/editAgent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Edit an agent
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->loadTemplate("_header.html.twig", "agents/editAgent.html.twig", 8)->display($context);
        // line 9
        echo "
    <h1 class=\"p-2 mt-4\">Editing \"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "codeName", [], "any", false, false, false, 10), "html", null, true);
        echo "\" : <span style=\"font-weight: 300\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "firstName", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "lastName", [], "any", false, false, false, 10), "html", null, true);
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
        // line 16
        $this->loadTemplate("_cancelBtn.html.twig", "agents/editAgent.html.twig", 16)->display($context);
        // line 17
        echo "
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "agents/editAgent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  87 => 17,  85 => 16,  79 => 13,  75 => 12,  66 => 10,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agents/editAgent.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/agents/editAgent.html.twig");
    }
}
