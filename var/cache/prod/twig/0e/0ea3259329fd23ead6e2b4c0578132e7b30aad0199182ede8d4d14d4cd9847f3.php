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

/* _cancelBtn.html.twig */
class __TwigTemplate_37b35bca34ca9aa088dd2adc2f7cec12b4203a5503094d4398d4045a882c2409 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<script>
    function goBack() {
        window.history.back();
    }
</script>
<button class=\"btn btn-secondary my-3\" type=\"button\" onclick=\"goBack()\">Cancel</button>
";
    }

    public function getTemplateName()
    {
        return "_cancelBtn.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_cancelBtn.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/_cancelBtn.html.twig");
    }
}
