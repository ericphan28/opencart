<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* adminoc/view/template/setting/setting.twig */
class __TwigTemplate_e664096790cea894f824bf46474cecf9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        yield ($context["text_edit"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"";
        // line 21
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        yield ($context["tab_local"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_mail"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_server"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"accordion\" id=\"accordion-general\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-general\">";
        // line 33
        yield ($context["text_general"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-general\" class=\"accordion-collapse collapse show\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <ul class=\"nav nav-tabs\">
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 38
            yield "                          <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 38);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 38)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 38);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 38);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 38);
            yield "</a></li>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                      </ul>
                      <div class=\"tab-content\">
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 43
            yield "                          <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            yield "\" class=\"tab-pane";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 43)) {
                yield " active";
            }
            yield "\">
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-title-";
            // line 45
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
                              <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"config_description[";
            // line 47
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            yield "][meta_title]\" value=\"";
            yield (((($_v0 = ($context["config_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["config_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47)] ?? null) : null), "meta_title", [], "any", false, false, false, 47)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            yield "\" class=\"form-control\"/>
                                <div id=\"error-meta-title-";
            // line 48
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            yield "\" class=\"invalid-feedback\"></div>
                              </div>
                            </div>
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-description-";
            // line 52
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
                              <div class=\"col-sm-10\">
                                <textarea name=\"config_description[";
            // line 54
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            yield "\" class=\"form-control\">";
            yield (((($_v2 = ($context["config_description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["config_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null), "meta_description", [], "any", false, false, false, 54)) : (""));
            yield "</textarea>
                              </div>
                            </div>
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-keyword-";
            // line 58
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
                              <div class=\"col-sm-10\">
                                <textarea name=\"config_description[";
            // line 60
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            yield "\" class=\"form-control\">";
            yield (((($_v4 = ($context["config_description"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["config_description"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 60)) : (""));
            yield "</textarea>
                              </div>
                            </div>
                          </div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-theme\">";
        // line 70
        yield ($context["text_theme"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-theme\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 74
        yield ($context["entry_logo"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"";
        // line 77
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        yield ($context["config_logo"] ?? null);
        yield "\" id=\"input-logo\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 79
        yield ($context["button_edit"] ?? null);
        yield "</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 80
        yield ($context["button_clear"] ?? null);
        yield "</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">";
        // line 86
        yield ($context["entry_icon"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"";
        // line 89
        yield ($context["icon"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-icon\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_icon\" value=\"";
        yield ($context["config_icon"] ?? null);
        yield "\" id=\"input-icon\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 91
        yield ($context["button_edit"] ?? null);
        yield "</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 92
        yield ($context["button_clear"] ?? null);
        yield "</button>
                            </div>
                          </div>
                          <div class=\"form-text\">";
        // line 95
        yield ($context["help_icon"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 99
        yield ($context["entry_theme"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 103
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 103);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 103) == ($context["config_theme"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 103);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "                          </select>
                          <br/>
                          <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 111
        yield ($context["entry_layout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 115
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 115);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 115) == ($context["config_layout_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 115);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-store\">";
        // line 124
        yield ($context["text_store"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-store\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 128
        yield ($context["entry_name"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_name\" value=\"";
        // line 130
        yield ($context["config_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" required/>
                          <div id=\"error-name\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 135
        yield ($context["entry_owner"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_owner\" value=\"";
        // line 137
        yield ($context["config_owner"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_owner"] ?? null);
        yield "\" id=\"input-owner\" class=\"form-control\" required/>
                          <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 142
        yield ($context["entry_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_address\" rows=\"5\" placeholder=\"";
        // line 144
        yield ($context["entry_address"] ?? null);
        yield "\" id=\"input-address\" class=\"form-control\" required>";
        yield ($context["config_address"] ?? null);
        yield "</textarea>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 148
        yield ($context["entry_email"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_email\" value=\"";
        // line 150
        yield ($context["config_email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" required/>
                          <div id=\"error-email\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 155
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 157
        yield ($context["config_telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
                          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-contact\">";
        // line 165
        yield ($context["text_contact"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-contact\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 169
        yield ($context["entry_image"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"";
        // line 172
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        yield ($context["config_image"] ?? null);
        yield "\" id=\"input-image\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 174
        yield ($context["button_edit"] ?? null);
        yield "</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 175
        yield ($context["button_clear"] ?? null);
        yield "</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 181
        yield ($context["entry_open"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 183
        yield ($context["entry_open"] ?? null);
        yield "\" id=\"input-open\" class=\"form-control\">";
        yield ($context["config_open"] ?? null);
        yield "</textarea>
                          <div class=\"form-text\">";
        // line 184
        yield ($context["help_open"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 188
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 190
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["config_comment"] ?? null);
        yield "</textarea>
                          <div class=\"form-text\">";
        // line 191
        yield ($context["help_comment"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      ";
        // line 194
        if (($context["locations"] ?? null)) {
            // line 195
            yield "                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
            // line 196
            yield ($context["entry_location"] ?? null);
            yield "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 200
                yield "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                // line 201
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 201);
                yield "\" id=\"input-location-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 201);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 201), ($context["config_location"] ?? null))) {
                    yield " checked";
                }
                yield "/> <label for=\"input-location-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 201);
                yield "\" class=\"form-check-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 201);
                yield "</label>
                                </div>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            yield "                            </div>
                            <div class=\"form-text\">";
            // line 205
            yield ($context["help_location"] ?? null);
            yield "</div>
                          </div>
                        </div>
                      ";
        }
        // line 209
        yield "                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 216
        yield ($context["text_region"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 218
        yield ($context["entry_country"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-country name=\"config_country_id\" value=\"";
        // line 220
        yield ($context["config_country_id"] ?? null);
        yield "\" id=\"x-country\" input-id=\"input-country\" input-class=\"form-select\" required>
                      <option value=\"0\">";
        // line 221
        yield ($context["text_select"] ?? null);
        yield "</option>
                    </x-country>
                    <div id=\"error-country\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 227
        yield ($context["entry_zone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-zone name=\"config_zone_id\" value=\"";
        // line 229
        yield ($context["config_zone_id"] ?? null);
        yield "\" target=\"x-country\" input-id=\"input-zone\" input-class=\"form-select\" required></x-zone>
                    <div id=\"error-zone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 234
        yield ($context["entry_timezone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                      ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 238
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 238);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 238) == ($context["config_timezone"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 238);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['timezone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 245
        yield ($context["text_language"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-language-catalog\" class=\"col-sm-2 col-form-label\">";
        // line 247
        yield ($context["entry_language"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_catalog\" id=\"input-language-catalog\" class=\"form-select\">
                      ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 251
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 251);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 251) == ($context["config_language_catalog"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 251);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">";
        // line 257
        yield ($context["entry_language_admin"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                      ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 261
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 261);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 261) == ($context["config_language_admin"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 261);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 268
        yield ($context["text_currency"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 270
        yield ($context["entry_currency"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                      ";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 274
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 274);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 274) == ($context["config_currency"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 274);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        yield "                    </select>
                    <div class=\"form-text\">";
        // line 277
        yield ($context["help_currency"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 281
        yield ($context["entry_currency_engine"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                      ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 285
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 285);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 285) == ($context["config_currency_engine"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 285);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency_engine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 291
        yield ($context["entry_currency_auto"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_currency_auto\" value=\"1\" checked=\"";
        // line 293
        yield ($context["config_currency_auto"] ?? null);
        yield "\" input-id=\"input-currency-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 294
        yield ($context["help_currency_auto"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 299
        yield ($context["text_measurement"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 301
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                      ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 305
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 305);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 305) == ($context["config_length_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 305);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['length_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 311
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                      ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 315
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 315);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 315) == ($context["config_weight_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 315);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['weight_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">
              <div class=\"accordion\" id=\"accordion-option\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">";
        // line 325
        yield ($context["text_product"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 329
        yield ($context["entry_product_description_length"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"";
        // line 331
        yield ($context["config_product_description_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product_description_length"] ?? null);
        yield "\" id=\"input-product-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 332
        yield ($context["help_product_description_length"] ?? null);
        yield "</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">";
        // line 337
        yield ($context["entry_pagination"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 339
        yield ($context["config_pagination"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_pagination"] ?? null);
        yield "\" id=\"input-pagination\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 340
        yield ($context["help_pagination"] ?? null);
        yield "</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 345
        yield ($context["entry_product_count"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_count\" value=\"1\" checked=\"";
        // line 347
        yield ($context["config_product_count"] ?? null);
        yield "\" input-id=\"input-product-count\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 348
        yield ($context["help_product_count"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">";
        // line 352
        yield ($context["entry_pagination_admin"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"";
        // line 354
        yield ($context["config_pagination_admin"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_pagination_admin"] ?? null);
        yield "\" id=\"input-pagination-admin\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 355
        yield ($context["help_pagination"] ?? null);
        yield "</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-autocomplete-limit\" class=\"col-sm-2 col-form-label\">";
        // line 360
        yield ($context["entry_autocomplete_limit"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_autocomplete_limit\" value=\"";
        // line 362
        yield ($context["config_autocomplete_limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_autocomplete_limit"] ?? null);
        yield "\" id=\"input-autocomplete-limit\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 363
        yield ($context["help_autocomplete_limit"] ?? null);
        yield "</div>
                          <div id=\"error-autocomplete-limit\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 368
        yield ($context["entry_product_report"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_report_status\" value=\"1\" checked=\"";
        // line 370
        yield ($context["config_product_report_status"] ?? null);
        yield "\" input-id=\"input-product-report\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 371
        yield ($context["help_product_report"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">";
        // line 378
        yield ($context["text_review"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 382
        yield ($context["entry_review_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_status\" value=\"1\" checked=\"";
        // line 384
        yield ($context["config_review_status"] ?? null);
        yield "\" input-id=\"input-review-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 385
        yield ($context["help_review"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 389
        yield ($context["entry_review_purchased"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_purchased\" value=\"1\" checked=\"";
        // line 391
        yield ($context["config_review_purchased"] ?? null);
        yield "\" input-id=\"input-review-purchased\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 392
        yield ($context["help_review_purchased"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 396
        yield ($context["entry_review_guest"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_guest\" value=\"1\" checked=\"";
        // line 398
        yield ($context["config_review_guest"] ?? null);
        yield "\" input-id=\"input-review-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 399
        yield ($context["help_review_guest"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-cms\">";
        // line 406
        yield ($context["text_cms"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-cms\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-article-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 410
        yield ($context["entry_article_description_length"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_article_description_length\" value=\"";
        // line 412
        yield ($context["config_article_description_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_article_description_length"] ?? null);
        yield "\" id=\"input-article-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 413
        yield ($context["help_article_description_length"] ?? null);
        yield "</div>
                          <div id=\"error-article-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 418
        yield ($context["entry_comment_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_status\" value=\"1\" checked=\"";
        // line 420
        yield ($context["config_comment_status"] ?? null);
        yield "\" input-id=\"input-comment-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 421
        yield ($context["help_comment_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 425
        yield ($context["entry_comment_approve"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_approve\" value=\"1\" checked=\"";
        // line 427
        yield ($context["config_comment_approve"] ?? null);
        yield "\" input-id=\"input-comment-approve\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 428
        yield ($context["help_comment_approve"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment-interval\" class=\"col-sm-2 col-form-label\">";
        // line 432
        yield ($context["entry_comment_interval"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_comment_interval\" value=\"";
        // line 434
        yield ($context["config_comment_interval"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_comment_interval"] ?? null);
        yield "\" id=\"input-comment-interval\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 435
        yield ($context["help_comment_interval"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-image\">";
        // line 442
        yield ($context["text_image"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-image\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-image-default-width\" class=\"col-sm-2 col-form-label\">";
        // line 446
        yield ($context["entry_image_default"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-default\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_default_width\" value=\"";
        // line 450
        yield ($context["config_image_default_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-default-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_default_height\" value=\"";
        // line 453
        yield ($context["config_image_default_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-default-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-default\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">";
        // line 460
        yield ($context["entry_image_thumb"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-thumb\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_thumb_width\" value=\"";
        // line 464
        yield ($context["config_image_thumb_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-thumb-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_thumb_height\" value=\"";
        // line 467
        yield ($context["config_image_thumb_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-thumb-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">";
        // line 474
        yield ($context["entry_image_popup"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-popup\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_popup_width\" value=\"";
        // line 478
        yield ($context["config_image_popup_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-popup-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_popup_height\" value=\"";
        // line 481
        yield ($context["config_image_popup_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-popup-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">";
        // line 491
        yield ($context["text_legal"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 495
        yield ($context["entry_cookie"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">";
        // line 498
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 499
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 500
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 500);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 500) == ($context["config_cookie_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 500);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 502
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 503
        yield ($context["help_cookie"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 507
        yield ($context["entry_gdpr"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">";
        // line 510
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 511
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 512
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 512);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 512) == ($context["config_gdpr_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 512);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 515
        yield ($context["help_gdpr"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 519
        yield ($context["entry_gdpr_limit"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 521
        yield ($context["config_gdpr_limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_gdpr_limit"] ?? null);
        yield "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 522
        yield ($context["help_gdpr_limit"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">";
        // line 529
        yield ($context["text_tax"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 533
        yield ($context["entry_tax"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_tax\" value=\"1\" checked=\"";
        // line 535
        yield ($context["config_tax"] ?? null);
        yield "\" input-id=\"input-tax\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 539
        yield ($context["entry_tax_default"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">";
        // line 542
        yield ($context["text_none"] ?? null);
        yield "</option>
                            <option value=\"shipping\"";
        // line 543
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_shipping"] ?? null);
        yield "</option>
                            <option value=\"payment\"";
        // line 544
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_payment"] ?? null);
        yield "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 546
        yield ($context["help_tax_default"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 550
        yield ($context["entry_tax_customer"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">";
        // line 553
        yield ($context["text_none"] ?? null);
        yield "</option>
                            <option value=\"shipping\"";
        // line 554
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_shipping"] ?? null);
        yield "</option>
                            <option value=\"payment\"";
        // line 555
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_payment"] ?? null);
        yield "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 557
        yield ($context["help_tax_customer"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">";
        // line 564
        yield ($context["text_account"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 568
        yield ($context["entry_customer_online"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_online\" value=\"1\" checked=\"";
        // line 570
        yield ($context["config_customer_online"] ?? null);
        yield "\" input-id=\"input-customer-online\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 571
        yield ($context["help_customer_online"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">";
        // line 575
        yield ($context["entry_customer_online_expire"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"";
        // line 578
        yield ($context["config_customer_online_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer_online_expire"] ?? null);
        yield "\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">";
        yield ($context["text_hour"] ?? null);
        yield "</span>
                          </div>
                          <div class=\"form-text\">";
        // line 580
        yield ($context["help_customer_online_expire"] ?? null);
        yield "</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 585
        yield ($context["entry_customer_activity"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_activity\" value=\"1\" checked=\"";
        // line 587
        yield ($context["config_customer_activity"] ?? null);
        yield "\" input-id=\"input-customer-activity\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 588
        yield ($context["help_customer_activity"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 592
        yield ($context["entry_customer_search"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_search\" value=\"1\" checked=\"";
        // line 594
        yield ($context["config_customer_search"] ?? null);
        yield "\" input-id=\"input-customer-search\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 598
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            ";
        // line 601
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 602
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 602);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 602) == ($context["config_customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 602);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 604
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 605
        yield ($context["help_customer_group"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 609
        yield ($context["entry_customer_group_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 612
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 613
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 614
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 614);
            yield "\" id=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 614);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 614), ($context["config_customer_group_display"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 614);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 614);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 617
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 618
        yield ($context["help_customer_group_display"] ?? null);
        yield "</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 623
        yield ($context["entry_customer_price"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_price\" value=\"1\" checked=\"";
        // line 625
        yield ($context["config_customer_price"] ?? null);
        yield "\" input-id=\"input-customer-price\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 626
        yield ($context["help_customer_price"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 630
        yield ($context["entry_telephone_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_display\" value=\"1\" checked=\"";
        // line 632
        yield ($context["config_telephone_display"] ?? null);
        yield "\" input-id=\"input-telephone-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 636
        yield ($context["entry_telephone_required"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_required\" value=\"1\" checked=\"";
        // line 638
        yield ($context["config_telephone_required"] ?? null);
        yield "\" input-id=\"input-telephone-required\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 642
        yield ($context["entry_account"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">";
        // line 645
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 646
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 647
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 647);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 647) == ($context["config_account_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 647);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 649
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 650
        yield ($context["help_account"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <fieldset>
                        <legend>";
        // line 654
        yield ($context["text_security"] ?? null);
        yield "</legend>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
        // line 656
        yield ($context["entry_2fa"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <x-switch name=\"config_2fa\" value=\"1\" checked=\"";
        // line 658
        yield ($context["config_2fa"] ?? null);
        yield "\" input-id=\"input-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                            <div class=\"form-text\">";
        // line 659
        yield ($context["help_2fa"] ?? null);
        yield "</div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 663
        yield ($context["entry_login_attempts"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 665
        yield ($context["config_login_attempts"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_login_attempts"] ?? null);
        yield "\" id=\"input-login-attempts\" class=\"form-control\"/>
                            <div class=\"form-text\">";
        // line 666
        yield ($context["help_login_attempts"] ?? null);
        yield "</div>
                            <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
        // line 671
        yield ($context["entry_password"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"overflow: auto;\">
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_uppercase\" value=\"1\" id=\"input-password-uppercase\" class=\"form-check-input\"";
        // line 675
        if (($context["config_password_uppercase"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-password-uppercase\" class=\"form-check-label\">";
        yield ($context["text_password_uppercase"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_lowercase\" value=\"1\" id=\"input-password-lowercase\" class=\"form-check-input\"";
        // line 678
        if (($context["config_password_lowercase"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-password-lowercase\" class=\"form-check-label\">";
        yield ($context["text_password_lowercase"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_number\" value=\"1\" id=\"input-password-number\" class=\"form-check-input\"";
        // line 681
        if (($context["config_password_number"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-password-number\" class=\"form-check-label\">";
        yield ($context["text_password_number"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_symbol\" value=\"1\" id=\"input-password-symbol\" class=\"form-check-input\"";
        // line 684
        if (($context["config_password_symbol"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-password-symbol\" class=\"form-check-label\">";
        yield ($context["text_password_symbol"] ?? null);
        yield "</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-password-length\" class=\"col-sm-2 col-form-label\">";
        // line 690
        yield ($context["entry_password_length"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_password_length\" value=\"";
        // line 692
        yield ($context["config_password_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password_length"] ?? null);
        yield "\" id=\"input-password-length\" class=\"form-control\"/>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">";
        // line 701
        yield ($context["text_checkout"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 705
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 707
        yield ($context["config_invoice_prefix"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 708
        yield ($context["help_invoice_prefix"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 712
        yield ($context["entry_shared"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_shared\" value=\"1\" checked=\"";
        // line 714
        yield ($context["config_shared"] ?? null);
        yield "\" input-id=\"input-shared\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 715
        yield ($context["help_shared"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 719
        yield ($context["entry_cart_weight"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_cart_weight\" value=\"1\" checked=\"";
        // line 721
        yield ($context["config_cart_weight"] ?? null);
        yield "\" input-id=\"input-cart-weight\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 722
        yield ($context["help_cart_weight"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 726
        yield ($context["entry_checkout_guest"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_guest\" value=\"1\" checked=\"";
        // line 728
        yield ($context["config_checkout_guest"] ?? null);
        yield "\" input-id=\"input-checkout-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 729
        yield ($context["help_checkout_guest"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 733
        yield ($context["entry_checkout_payment_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_payment_address\" value=\"1\" checked=\"";
        // line 735
        yield ($context["config_checkout_payment_address"] ?? null);
        yield "\" input-id=\"input-checkout-payment-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 736
        yield ($context["help_checkout_payment_address"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 740
        yield ($context["entry_checkout_shipping_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_shipping_address\" value=\"1\" checked=\"";
        // line 742
        yield ($context["config_checkout_shipping_address"] ?? null);
        yield "\" input-id=\"input-checkout-shipping-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 743
        yield ($context["help_checkout_shipping_address"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 747
        yield ($context["entry_checkout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">";
        // line 750
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 751
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 752
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 752);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 752) == ($context["config_checkout_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 752);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 754
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 755
        yield ($context["help_checkout"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 759
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            ";
        // line 762
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 763
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 763);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 763) == ($context["config_order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 763);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 765
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 766
        yield ($context["help_order_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 770
        yield ($context["entry_processing_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 773
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 774
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
            // line 775
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 775);
            yield "\" id=\"input-processing-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 775);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 775), ($context["config_processing_status"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-processing-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 775);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 775);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 779
        yield ($context["help_processing_status"] ?? null);
        yield "</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 784
        yield ($context["entry_complete_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 788
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
            // line 789
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 789);
            yield "\" id=\"input-complete-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 789);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 789), ($context["config_complete_status"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-complete-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 789);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 789);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 792
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 793
        yield ($context["help_complete_status"] ?? null);
        yield "</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 798
        yield ($context["entry_failed_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_failed_status_id\" id=\"input-failed-status\" class=\"form-select\">
                            ";
        // line 801
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 802
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 802);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 802) == ($context["config_failed_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 802);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 804
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 805
        yield ($context["help_failed_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-void-status\" class=\"col-sm-2 col-form-label\">";
        // line 809
        yield ($context["entry_void_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_void_status_id\" id=\"input-void-status\" class=\"form-select\">
                            ";
        // line 812
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 813
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 813);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 813) == ($context["config_void_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 813);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 815
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 816
        yield ($context["help_void_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 820
        yield ($context["entry_fraud_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            ";
        // line 823
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 824
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 824);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 824) == ($context["config_fraud_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 824);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 826
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 827
        yield ($context["help_fraud_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 831
        yield ($context["entry_api"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">";
        // line 834
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 835
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 836
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 836);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 836) == ($context["config_api_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 836);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['api'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 838
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 839
        yield ($context["help_api"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">";
        // line 846
        yield ($context["text_subscription"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">";
        // line 851
        yield ($context["entry_subscription_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            ";
        // line 854
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 855
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 855);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 855) == ($context["config_subscription_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 855);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 857
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 858
        yield ($context["help_subscription"] ?? null);
        yield "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">";
        // line 863
        yield ($context["entry_subscription_active_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            ";
        // line 866
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 867
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 867);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 867) == ($context["config_subscription_active_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 867);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 869
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">";
        // line 874
        yield ($context["entry_subscription_expired_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            ";
        // line 877
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 878
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 878);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 878) == ($context["config_subscription_expired_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 878);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 880
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-suspended-status\" class=\"col-sm-2 col-form-label\">";
        // line 885
        yield ($context["entry_subscription_suspended_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_suspended_status_id\" id=\"input-subscription-suspended-status\" class=\"form-select\">
                            ";
        // line 888
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 889
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 889);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 889) == ($context["config_subscription_suspended_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 889);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 891
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">";
        // line 896
        yield ($context["entry_subscription_canceled_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            ";
        // line 899
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 900
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 900);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 900) == ($context["config_subscription_canceled_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 900);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 902
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 907
        yield ($context["entry_subscription_failed_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            ";
        // line 910
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 911
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 911);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 911) == ($context["config_subscription_failed_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 911);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 913
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">";
        // line 918
        yield ($context["entry_subscription_denied_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            ";
        // line 921
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 922
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 922);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 922) == ($context["config_subscription_denied_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 922);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 924
        yield "                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">";
        // line 932
        yield ($context["text_stock"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 936
        yield ($context["entry_stock_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_display\" value=\"1\" checked=\"";
        // line 938
        yield ($context["config_stock_display"] ?? null);
        yield "\" input-id=\"input-stock-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 939
        yield ($context["help_stock_display"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 943
        yield ($context["entry_stock_warning"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_warning\" value=\"1\" checked=\"";
        // line 945
        yield ($context["config_stock_warning"] ?? null);
        yield "\" input-id=\"input-stock-warning\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 946
        yield ($context["help_stock_warning"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 950
        yield ($context["entry_stock_checkout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_checkout\" value=\"1\" checked=\"";
        // line 952
        yield ($context["config_stock_checkout"] ?? null);
        yield "\" input-id=\"input-stock-checkout\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 953
        yield ($context["help_stock_checkout"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 957
        yield ($context["entry_stock_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                            ";
        // line 960
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 961
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 961);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 961) == ($context["config_stock_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 961);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stock_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 963
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 964
        yield ($context["help_stock_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">";
        // line 971
        yield ($context["text_affiliate"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 975
        yield ($context["entry_affiliate_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_status\" checked=\"";
        // line 977
        yield ($context["config_affiliate_status"] ?? null);
        yield "\" value=\"1\" input-id=\"input-affiliate-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 978
        yield ($context["help_affiliate_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 982
        yield ($context["entry_affiliate_group"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            ";
        // line 985
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 986
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 986);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 986) == ($context["config_affiliate_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 986);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 988
        yield "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 992
        yield ($context["entry_affiliate_approval"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_approval\" value=\"1\" checked=\"";
        // line 994
        yield ($context["config_affiliate_approval"] ?? null);
        yield "\" input-id=\"input-affiliate-approval\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 995
        yield ($context["help_affiliate_approval"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 999
        yield ($context["entry_affiliate_auto"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_auto\" value=\"1\" checked=\"";
        // line 1001
        yield ($context["config_affiliate_auto"] ?? null);
        yield "\" input-id=\"input-affiliate-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 1002
        yield ($context["help_affiliate_auto"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 1006
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 1008
        yield ($context["config_affiliate_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 1009
        yield ($context["help_affiliate_commission"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1013
        yield ($context["entry_affiliate_expire"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_expire\" value=\"";
        // line 1015
        yield ($context["config_affiliate_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_expire"] ?? null);
        yield "\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 1016
        yield ($context["help_affiliate_expire"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 1020
        yield ($context["entry_affiliate"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">";
        // line 1023
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1024
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1025
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1025);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1025) == ($context["config_affiliate_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1025);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1027
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1028
        yield ($context["help_affiliate"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">";
        // line 1035
        yield ($context["text_return"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 1039
        yield ($context["entry_return_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            ";
        // line 1042
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1043
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1043);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1043) == ($context["config_return_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1043);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1045
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1046
        yield ($context["help_return_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 1050
        yield ($context["entry_return"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">";
        // line 1053
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1054
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1055
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1055);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1055) == ($context["config_return_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1055);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1057
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1058
        yield ($context["help_return"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">";
        // line 1065
        yield ($context["text_captcha"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 1069
        yield ($context["entry_captcha"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">";
        // line 1072
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1073
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1074
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1074);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1074) == ($context["config_captcha"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1074);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1076
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1077
        yield ($context["help_captcha"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 1081
        yield ($context["entry_captcha_page"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 1084
        $context["captcha_page_row"] = 0;
        // line 1085
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1086
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
            // line 1087
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1087);
            yield "\" id=\"input-captcha-";
            yield ($context["captcha_page_row"] ?? null);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1087), ($context["config_captcha_page"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-captcha-";
            yield ($context["captcha_page_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1087);
            yield "</label>
                              </div>
                              ";
            // line 1089
            $context["captcha_page_row"] = (($context["captcha_page_row"] ?? null) + 1);
            // line 1090
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha_page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1091
        yield "                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1101
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 1103
        yield ($context["entry_mail_engine"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"\">";
        // line 1106
        yield ($context["text_none"] ?? null);
        yield "</option>
                      <option value=\"mail\"";
        // line 1107
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_mail"] ?? null);
        yield "</option>
                      <option value=\"smtp\"";
        // line 1108
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_smtp"] ?? null);
        yield "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1110
        yield ($context["help_mail_engine"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 1114
        yield ($context["entry_mail_parameter"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1116
        yield ($context["config_mail_parameter"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1117
        yield ($context["help_mail_parameter"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1122
        yield ($context["text_smtp"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 1124
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1126
        yield ($context["config_mail_smtp_hostname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1127
        yield ($context["help_mail_smtp_hostname"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 1131
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1133
        yield ($context["config_mail_smtp_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 1137
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1139
        yield ($context["config_mail_smtp_password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1140
        yield ($context["help_mail_smtp_password"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 1144
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1146
        yield ($context["config_mail_smtp_port"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 1150
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1152
        yield ($context["config_mail_smtp_timeout"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1157
        yield ($context["text_mail_alert"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1159
        yield ($context["entry_mail_alert"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1162
        $context["mail_alert_row"] = 0;
        // line 1163
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1164
            yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
            // line 1165
            yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1165);
            yield "\" id=\"input-mail-alert-";
            yield ($context["mail_alert_row"] ?? null);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1165), ($context["config_mail_alert"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-mail-alert-";
            yield ($context["mail_alert_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1165);
            yield "</label>
                        </div>
                        ";
            // line 1167
            $context["mail_alert_row"] = (($context["mail_alert_row"] ?? null) + 1);
            // line 1168
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mail_alert'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1169
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 1170
        yield ($context["help_mail_alert"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1174
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1176
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "\" id=\"input-mail-alert-email\" class=\"form-control\">";
        yield ($context["config_mail_alert_email"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1177
        yield ($context["help_mail_alert_email"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1184
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1186
        yield ($context["entry_maintenance"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_maintenance\" value=\"1\" checked=\"";
        // line 1188
        yield ($context["config_maintenance"] ?? null);
        yield "\" input-id=\"input-maintenance\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 1189
        yield ($context["help_maintenance"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1193
        yield ($context["entry_seo_url"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_seo_url\" value=\"1\" checked=\"";
        // line 1195
        yield ($context["config_seo_url"] ?? null);
        yield "\" input-id=\"input-seo-url\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 1196
        yield ($context["help_seo_url"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1201
        yield ($context["text_security"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1203
        yield ($context["entry_user_2fa"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_user_2fa\" value=\"1\" checked=\"";
        // line 1205
        yield ($context["config_user_2fa"] ?? null);
        yield "\" input-id=\"input-user-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 1206
        yield ($context["help_user_2fa"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-2fa-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1210
        yield ($context["entry_2fa_expire"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"number\" name=\"config_2fa_expire\" value=\"";
        // line 1212
        yield ($context["config_2fa_expire"] ?? null);
        yield "\" id=\"input-2fa-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1213
        yield ($context["help_2fa_expire"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1217
        yield ($context["entry_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"overflow: auto;\">
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_uppercase\" value=\"1\" id=\"input-user-password-uppercase\" class=\"form-check-input\"";
        // line 1221
        if (($context["config_user_password_uppercase"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-user-password-uppercase\" class=\"form-check-label\">";
        yield ($context["text_password_uppercase"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_lowercase\" value=\"1\" id=\"input-user-password-lowercase\" class=\"form-check-input\"";
        // line 1224
        if (($context["config_user_password_lowercase"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-user-password-lowercase\" class=\"form-check-label\">";
        yield ($context["text_password_lowercase"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_number\" value=\"1\" id=\"input-user-password-number\" class=\"form-check-input\"";
        // line 1227
        if (($context["config_user_password_number"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-user-password-number\" class=\"form-check-label\">";
        yield ($context["text_password_number"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_symbol\" value=\"1\" id=\"input-user-password-symbol\" class=\"form-check-input\"";
        // line 1230
        if (($context["config_user_password_symbol"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-user-password-symbol\" class=\"form-check-label\">";
        yield ($context["text_password_symbol"] ?? null);
        yield "</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-user-password-length\" class=\"col-sm-2 col-form-label\">";
        // line 1236
        yield ($context["entry_password_length"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_user_password_length\" value=\"";
        // line 1238
        yield ($context["config_user_password_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password_length"] ?? null);
        yield "\" id=\"input-user-password-length\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1243
        yield ($context["text_error"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1245
        yield ($context["entry_error_display"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_display\" value=\"1\" checked=\"";
        // line 1247
        yield ($context["config_error_display"] ?? null);
        yield "\" input-id=\"input-error-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1251
        yield ($context["entry_error_log"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_log\" value=\"1\" checked=\"";
        // line 1253
        yield ($context["config_error_log"] ?? null);
        yield "\" input-id=\"input-error-log\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting.theme&user_token=";
        // line 1269
        yield ($context["user_token"] ?? null);
        yield "&theme=' + this.value,
        dataType: 'html',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');

// Dynamic required validation for language tabs
\$('form').on('submit', function(e) {
    // Remove all required attributes first
    \$('input[name*=\"[meta_title]\"]').removeAttr('required');
    
    // Add required only to visible/active tab
    \$('.tab-pane.active input[name*=\"[meta_title]\"]').attr('required', true);
});

// Handle tab switching
\$('a[data-bs-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
    // Remove required from all meta_title inputs
    \$('input[name*=\"[meta_title]\"]').removeAttr('required');
    
    // Add required to active tab only
    \$(\$(e.target).attr('href')).find('input[name*=\"[meta_title]\"]').attr('required', true);
});

// Initialize - set required for first active tab
\$(document).ready(function() {
    \$('.tab-pane.active input[name*=\"[meta_title]\"]').attr('required', true);
});
//--></script>
";
        // line 1311
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "adminoc/view/template/setting/setting.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  3342 => 1311,  3297 => 1269,  3278 => 1253,  3273 => 1251,  3266 => 1247,  3261 => 1245,  3256 => 1243,  3246 => 1238,  3241 => 1236,  3228 => 1230,  3218 => 1227,  3208 => 1224,  3198 => 1221,  3191 => 1217,  3184 => 1213,  3180 => 1212,  3175 => 1210,  3168 => 1206,  3164 => 1205,  3159 => 1203,  3154 => 1201,  3146 => 1196,  3142 => 1195,  3137 => 1193,  3130 => 1189,  3126 => 1188,  3121 => 1186,  3116 => 1184,  3106 => 1177,  3100 => 1176,  3095 => 1174,  3088 => 1170,  3085 => 1169,  3079 => 1168,  3077 => 1167,  3062 => 1165,  3059 => 1164,  3054 => 1163,  3052 => 1162,  3046 => 1159,  3041 => 1157,  3031 => 1152,  3026 => 1150,  3017 => 1146,  3012 => 1144,  3005 => 1140,  2999 => 1139,  2994 => 1137,  2985 => 1133,  2980 => 1131,  2973 => 1127,  2967 => 1126,  2962 => 1124,  2957 => 1122,  2949 => 1117,  2943 => 1116,  2938 => 1114,  2931 => 1110,  2922 => 1108,  2914 => 1107,  2910 => 1106,  2904 => 1103,  2899 => 1101,  2887 => 1091,  2881 => 1090,  2879 => 1089,  2864 => 1087,  2861 => 1086,  2856 => 1085,  2854 => 1084,  2848 => 1081,  2841 => 1077,  2838 => 1076,  2823 => 1074,  2819 => 1073,  2815 => 1072,  2809 => 1069,  2802 => 1065,  2792 => 1058,  2789 => 1057,  2774 => 1055,  2770 => 1054,  2766 => 1053,  2760 => 1050,  2753 => 1046,  2750 => 1045,  2735 => 1043,  2731 => 1042,  2725 => 1039,  2718 => 1035,  2708 => 1028,  2705 => 1027,  2690 => 1025,  2686 => 1024,  2682 => 1023,  2676 => 1020,  2669 => 1016,  2663 => 1015,  2658 => 1013,  2651 => 1009,  2645 => 1008,  2640 => 1006,  2633 => 1002,  2629 => 1001,  2624 => 999,  2617 => 995,  2613 => 994,  2608 => 992,  2602 => 988,  2587 => 986,  2583 => 985,  2577 => 982,  2570 => 978,  2566 => 977,  2561 => 975,  2554 => 971,  2544 => 964,  2541 => 963,  2526 => 961,  2522 => 960,  2516 => 957,  2509 => 953,  2505 => 952,  2500 => 950,  2493 => 946,  2489 => 945,  2484 => 943,  2477 => 939,  2473 => 938,  2468 => 936,  2461 => 932,  2451 => 924,  2436 => 922,  2432 => 921,  2426 => 918,  2419 => 913,  2404 => 911,  2400 => 910,  2394 => 907,  2387 => 902,  2372 => 900,  2368 => 899,  2362 => 896,  2355 => 891,  2340 => 889,  2336 => 888,  2330 => 885,  2323 => 880,  2308 => 878,  2304 => 877,  2298 => 874,  2291 => 869,  2276 => 867,  2272 => 866,  2266 => 863,  2258 => 858,  2255 => 857,  2240 => 855,  2236 => 854,  2230 => 851,  2222 => 846,  2212 => 839,  2209 => 838,  2194 => 836,  2190 => 835,  2186 => 834,  2180 => 831,  2173 => 827,  2170 => 826,  2155 => 824,  2151 => 823,  2145 => 820,  2138 => 816,  2135 => 815,  2120 => 813,  2116 => 812,  2110 => 809,  2103 => 805,  2100 => 804,  2085 => 802,  2081 => 801,  2075 => 798,  2067 => 793,  2064 => 792,  2045 => 789,  2042 => 788,  2038 => 787,  2032 => 784,  2024 => 779,  2021 => 778,  2002 => 775,  1999 => 774,  1995 => 773,  1989 => 770,  1982 => 766,  1979 => 765,  1964 => 763,  1960 => 762,  1954 => 759,  1947 => 755,  1944 => 754,  1929 => 752,  1925 => 751,  1921 => 750,  1915 => 747,  1908 => 743,  1904 => 742,  1899 => 740,  1892 => 736,  1888 => 735,  1883 => 733,  1876 => 729,  1872 => 728,  1867 => 726,  1860 => 722,  1856 => 721,  1851 => 719,  1844 => 715,  1840 => 714,  1835 => 712,  1828 => 708,  1822 => 707,  1817 => 705,  1810 => 701,  1796 => 692,  1791 => 690,  1778 => 684,  1768 => 681,  1758 => 678,  1748 => 675,  1741 => 671,  1733 => 666,  1727 => 665,  1722 => 663,  1715 => 659,  1711 => 658,  1706 => 656,  1701 => 654,  1694 => 650,  1691 => 649,  1676 => 647,  1672 => 646,  1668 => 645,  1662 => 642,  1655 => 638,  1650 => 636,  1643 => 632,  1638 => 630,  1631 => 626,  1627 => 625,  1622 => 623,  1614 => 618,  1611 => 617,  1592 => 614,  1589 => 613,  1585 => 612,  1579 => 609,  1572 => 605,  1569 => 604,  1554 => 602,  1550 => 601,  1544 => 598,  1537 => 594,  1532 => 592,  1525 => 588,  1521 => 587,  1516 => 585,  1508 => 580,  1499 => 578,  1493 => 575,  1486 => 571,  1482 => 570,  1477 => 568,  1470 => 564,  1460 => 557,  1451 => 555,  1443 => 554,  1439 => 553,  1433 => 550,  1426 => 546,  1417 => 544,  1409 => 543,  1405 => 542,  1399 => 539,  1392 => 535,  1387 => 533,  1380 => 529,  1370 => 522,  1364 => 521,  1359 => 519,  1352 => 515,  1349 => 514,  1334 => 512,  1330 => 511,  1326 => 510,  1320 => 507,  1313 => 503,  1310 => 502,  1295 => 500,  1291 => 499,  1287 => 498,  1281 => 495,  1274 => 491,  1259 => 481,  1251 => 478,  1244 => 474,  1232 => 467,  1224 => 464,  1217 => 460,  1205 => 453,  1197 => 450,  1190 => 446,  1183 => 442,  1173 => 435,  1167 => 434,  1162 => 432,  1155 => 428,  1151 => 427,  1146 => 425,  1139 => 421,  1135 => 420,  1130 => 418,  1122 => 413,  1116 => 412,  1111 => 410,  1104 => 406,  1094 => 399,  1090 => 398,  1085 => 396,  1078 => 392,  1074 => 391,  1069 => 389,  1062 => 385,  1058 => 384,  1053 => 382,  1046 => 378,  1036 => 371,  1032 => 370,  1027 => 368,  1019 => 363,  1013 => 362,  1008 => 360,  1000 => 355,  994 => 354,  989 => 352,  982 => 348,  978 => 347,  973 => 345,  965 => 340,  959 => 339,  954 => 337,  946 => 332,  940 => 331,  935 => 329,  928 => 325,  918 => 317,  903 => 315,  899 => 314,  893 => 311,  887 => 307,  872 => 305,  868 => 304,  862 => 301,  857 => 299,  849 => 294,  845 => 293,  840 => 291,  834 => 287,  819 => 285,  815 => 284,  809 => 281,  802 => 277,  799 => 276,  784 => 274,  780 => 273,  774 => 270,  769 => 268,  762 => 263,  747 => 261,  743 => 260,  737 => 257,  731 => 253,  716 => 251,  712 => 250,  706 => 247,  701 => 245,  694 => 240,  679 => 238,  675 => 237,  669 => 234,  661 => 229,  656 => 227,  647 => 221,  643 => 220,  638 => 218,  633 => 216,  624 => 209,  617 => 205,  614 => 204,  595 => 201,  592 => 200,  588 => 199,  582 => 196,  579 => 195,  577 => 194,  571 => 191,  565 => 190,  560 => 188,  553 => 184,  547 => 183,  542 => 181,  533 => 175,  529 => 174,  520 => 172,  514 => 169,  507 => 165,  494 => 157,  489 => 155,  479 => 150,  474 => 148,  465 => 144,  460 => 142,  450 => 137,  445 => 135,  435 => 130,  430 => 128,  423 => 124,  414 => 117,  399 => 115,  395 => 114,  389 => 111,  381 => 105,  366 => 103,  362 => 102,  356 => 99,  349 => 95,  343 => 92,  339 => 91,  330 => 89,  324 => 86,  315 => 80,  311 => 79,  302 => 77,  296 => 74,  289 => 70,  282 => 65,  257 => 60,  250 => 58,  237 => 54,  230 => 52,  223 => 48,  213 => 47,  206 => 45,  196 => 43,  179 => 42,  175 => 40,  148 => 38,  131 => 37,  124 => 33,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  94 => 21,  89 => 19,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_edit }}</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_local }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_option }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_mail }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_server }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"accordion\" id=\"accordion-general\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-general\">{{ text_general }}</button></h2>
                  <div id=\"collapse-general\" class=\"accordion-collapse collapse show\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <ul class=\"nav nav-tabs\">
                        {% for language in languages %}
                          <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
                        {% endfor %}
                      </ul>
                      <div class=\"tab-content\">
                        {% for language in languages %}
                          <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-title-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_title }}</label>
                              <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"config_description[{{ language.language_id }}][meta_title]\" value=\"{{ config_description[language.language_id] ? config_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title-{{ language.language_id }}\" class=\"form-control\"/>
                                <div id=\"error-meta-title-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                              </div>
                            </div>
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
                              <div class=\"col-sm-10\">
                                <textarea name=\"config_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description-{{ language.language_id }}\" class=\"form-control\">{{ config_description[language.language_id] ? config_description[language.language_id].meta_description }}</textarea>
                              </div>
                            </div>
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-keyword-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keyword }}</label>
                              <div class=\"col-sm-10\">
                                <textarea name=\"config_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword-{{ language.language_id }}\" class=\"form-control\">{{ config_description[language.language_id] ? config_description[language.language_id].meta_keyword }}</textarea>
                              </div>
                            </div>
                          </div>
                        {% endfor %}
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-theme\">{{ text_theme }}</button></h2>
                  <div id=\"collapse-theme\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">{{ entry_logo }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"{{ logo }}\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_logo\" value=\"{{ config_logo }}\" id=\"input-logo\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">{{ entry_icon }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"{{ icon }}\" alt=\"\" title=\"\" id=\"thumb-icon\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_icon\" value=\"{{ config_icon }}\" id=\"input-icon\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                            </div>
                          </div>
                          <div class=\"form-text\">{{ help_icon }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">{{ entry_theme }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                            {% for theme in themes %}
                              <option value=\"{{ theme.value }}\"{% if theme.value == config_theme %} selected{% endif %}>{{ theme.text }}</option>
                            {% endfor %}
                          </select>
                          <br/>
                          <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">{{ entry_layout }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                            {% for layout in layouts %}
                              <option value=\"{{ layout.layout_id }}\"{% if layout.layout_id == config_layout_id %} selected{% endif %}>{{ layout.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-store\">{{ text_store }}</button></h2>
                  <div id=\"collapse-store\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_name\" value=\"{{ config_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\" required/>
                          <div id=\"error-name\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">{{ entry_owner }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_owner\" value=\"{{ config_owner }}\" placeholder=\"{{ entry_owner }}\" id=\"input-owner\" class=\"form-control\" required/>
                          <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-address\" class=\"col-sm-2 col-form-label\">{{ entry_address }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_address\" rows=\"5\" placeholder=\"{{ entry_address }}\" id=\"input-address\" class=\"form-control\" required>{{ config_address }}</textarea>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_email\" value=\"{{ config_email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" required/>
                          <div id=\"error-email\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_telephone\" value=\"{{ config_telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-contact\">{{ text_contact }}</button></h2>
                  <div id=\"collapse-contact\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-image\" class=\"col-sm-2 col-form-label\">{{ entry_image }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_image\" value=\"{{ config_image }}\" id=\"input-image\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-open\" class=\"col-sm-2 col-form-label\">{{ entry_open }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_open\" rows=\"5\" placeholder=\"{{ entry_open }}\" id=\"input-open\" class=\"form-control\">{{ config_open }}</textarea>
                          <div class=\"form-text\">{{ help_open }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ config_comment }}</textarea>
                          <div class=\"form-text\">{{ help_comment }}</div>
                        </div>
                      </div>
                      {% if locations %}
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">{{ entry_location }}</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for location in locations %}
                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"config_location[]\" value=\"{{ location.location_id }}\" id=\"input-location-{{ location.location_id }}\" class=\"form-check-input\"{% if location.location_id in config_location %} checked{% endif %}/> <label for=\"input-location-{{ location.location_id }}\" class=\"form-check-label\">{{ location.name }}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"form-text\">{{ help_location }}</div>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_region }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-country\" class=\"col-sm-2 col-form-label\">{{ entry_country }}</label>
                  <div class=\"col-sm-10\">
                    <x-country name=\"config_country_id\" value=\"{{ config_country_id }}\" id=\"x-country\" input-id=\"input-country\" input-class=\"form-select\" required>
                      <option value=\"0\">{{ text_select }}</option>
                    </x-country>
                    <div id=\"error-country\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">{{ entry_zone }}</label>
                  <div class=\"col-sm-10\">
                    <x-zone name=\"config_zone_id\" value=\"{{ config_zone_id }}\" target=\"x-country\" input-id=\"input-zone\" input-class=\"form-select\" required></x-zone>
                    <div id=\"error-zone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">{{ entry_timezone }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                      {% for timezone in timezones %}
                        <option value=\"{{ timezone.value }}\"{% if timezone.value == config_timezone %} selected{% endif %}>{{ timezone.text }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_language }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-language-catalog\" class=\"col-sm-2 col-form-label\">{{ entry_language }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_catalog\" id=\"input-language-catalog\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.code }}\"{% if language.code == config_language_catalog %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">{{ entry_language_admin }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.code }}\"{% if language.code == config_language_admin %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_currency }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">{{ entry_currency }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                      {% for currency in currencies %}
                        <option value=\"{{ currency.code }}\"{% if currency.code == config_currency %} selected{% endif %}>{{ currency.title }}</option>
                      {% endfor %}
                    </select>
                    <div class=\"form-text\">{{ help_currency }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">{{ entry_currency_engine }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                      {% for currency_engine in currency_engines %}
                        <option value=\"{{ currency_engine.value }}\"{% if currency_engine.value == config_currency_engine %} selected{% endif %}>{{ currency_engine.text }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_currency_auto }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_currency_auto\" value=\"1\" checked=\"{{ config_currency_auto }}\" input-id=\"input-currency-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_currency_auto }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_measurement }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">{{ entry_length_class }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                      {% for length_class in length_classes %}
                        <option value=\"{{ length_class.length_class_id }}\"{% if length_class.length_class_id == config_length_class_id %} selected{% endif %}>{{ length_class.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">{{ entry_weight_class }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                      {% for weight_class in weight_classes %}
                        <option value=\"{{ weight_class.weight_class_id }}\"{% if weight_class.weight_class_id == config_weight_class_id %} selected{% endif %}>{{ weight_class.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">
              <div class=\"accordion\" id=\"accordion-option\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">{{ text_product }}</button></h2>
                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">{{ entry_product_description_length }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"{{ config_product_description_length }}\" placeholder=\"{{ entry_product_description_length }}\" id=\"input-product-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_product_description_length }}</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">{{ entry_pagination }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"{{ config_pagination }}\" placeholder=\"{{ entry_pagination }}\" id=\"input-pagination\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_pagination }}</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_product_count }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_count\" value=\"1\" checked=\"{{ config_product_count }}\" input-id=\"input-product-count\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_product_count }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">{{ entry_pagination_admin }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"{{ config_pagination_admin }}\" placeholder=\"{{ entry_pagination_admin }}\" id=\"input-pagination-admin\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_pagination }}</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-autocomplete-limit\" class=\"col-sm-2 col-form-label\">{{ entry_autocomplete_limit }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_autocomplete_limit\" value=\"{{ config_autocomplete_limit }}\" placeholder=\"{{ entry_autocomplete_limit }}\" id=\"input-autocomplete-limit\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_autocomplete_limit }}</div>
                          <div id=\"error-autocomplete-limit\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_product_report }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_report_status\" value=\"1\" checked=\"{{ config_product_report_status }}\" input-id=\"input-product-report\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_product_report }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">{{ text_review }}</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_status }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_status\" value=\"1\" checked=\"{{ config_review_status }}\" input-id=\"input-review-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_review }}</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_purchased }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_purchased\" value=\"1\" checked=\"{{ config_review_purchased }}\" input-id=\"input-review-purchased\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_review_purchased }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_guest }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_guest\" value=\"1\" checked=\"{{ config_review_guest }}\" input-id=\"input-review-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_review_guest }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-cms\">{{ text_cms }}</button></h2>
                  <div id=\"collapse-cms\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-article-description-length\" class=\"col-sm-2 col-form-label\">{{ entry_article_description_length }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_article_description_length\" value=\"{{ config_article_description_length }}\" placeholder=\"{{ entry_article_description_length }}\" id=\"input-article-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_article_description_length }}</div>
                          <div id=\"error-article-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_comment_status }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_status\" value=\"1\" checked=\"{{ config_comment_status }}\" input-id=\"input-comment-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_comment_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_comment_approve }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_approve\" value=\"1\" checked=\"{{ config_comment_approve }}\" input-id=\"input-comment-approve\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_comment_approve }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment-interval\" class=\"col-sm-2 col-form-label\">{{ entry_comment_interval }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_comment_interval\" value=\"{{ config_comment_interval }}\" placeholder=\"{{ entry_comment_interval }}\" id=\"input-comment-interval\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_comment_interval }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-image\">{{ text_image }}</button></h2>
                  <div id=\"collapse-image\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-image-default-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_default }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-default\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_default_width\" value=\"{{ config_image_default_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-default-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_default_height\" value=\"{{ config_image_default_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-default-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-default\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_thumb }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-thumb\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_thumb_width\" value=\"{{ config_image_thumb_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-thumb-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_thumb_height\" value=\"{{ config_image_thumb_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-thumb-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_popup }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-popup\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_popup_width\" value=\"{{ config_image_popup_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-popup-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_popup_height\" value=\"{{ config_image_popup_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-popup-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">{{ text_legal }}</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">{{ entry_cookie }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_cookie_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_cookie }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">{{ entry_gdpr }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_gdpr_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_gdpr }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">{{ entry_gdpr_limit }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"{{ config_gdpr_limit }}\" placeholder=\"{{ entry_gdpr_limit }}\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_gdpr_limit }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">{{ text_tax }}</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_tax }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_tax\" value=\"1\" checked=\"{{ config_tax }}\" input-id=\"input-tax\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">{{ entry_tax_default }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            <option value=\"shipping\"{% if config_tax_default == 'shipping' %} selected{% endif %}>{{ text_shipping }}</option>
                            <option value=\"payment\"{% if config_tax_default == 'payment' %} selected{% endif %}>{{ text_payment }}</option>
                          </select>
                          <div class=\"form-text\">{{ help_tax_default }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">{{ entry_tax_customer }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            <option value=\"shipping\"{% if config_tax_customer == 'shipping' %} selected{% endif %}>{{ text_shipping }}</option>
                            <option value=\"payment\"{% if config_tax_customer == 'payment' %} selected{% endif %}>{{ text_payment }}</option>
                          </select>
                          <div class=\"form-text\">{{ help_tax_customer }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">{{ text_account }}</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_online }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_online\" value=\"1\" checked=\"{{ config_customer_online }}\" input-id=\"input-customer-online\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_customer_online }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">{{ entry_customer_online_expire }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"{{ config_customer_online_expire }}\" placeholder=\"{{ entry_customer_online_expire }}\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">{{ text_hour }}</span>
                          </div>
                          <div class=\"form-text\">{{ help_customer_online_expire }}</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_activity }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_activity\" value=\"1\" checked=\"{{ config_customer_activity }}\" input-id=\"input-customer-activity\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_customer_activity }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_search }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_search\" value=\"1\" checked=\"{{ config_customer_search }}\" input-id=\"input-customer-search\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == config_customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_customer_group }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_group_display }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for customer_group in customer_groups %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"{{ customer_group.customer_group_id }}\" id=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-input\"{% if customer_group.customer_group_id in config_customer_group_display %} checked{% endif %}/> <label for=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-label\">{{ customer_group.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_customer_group_display }}</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_price }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_price\" value=\"1\" checked=\"{{ config_customer_price }}\" input-id=\"input-customer-price\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_customer_price }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_telephone_display }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_display\" value=\"1\" checked=\"{{ config_telephone_display }}\" input-id=\"input-telephone-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_telephone_required }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_required\" value=\"1\" checked=\"{{ config_telephone_required }}\" input-id=\"input-telephone-required\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">{{ entry_account }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_account_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_account }}</div>
                        </div>
                      </div>
                      <fieldset>
                        <legend>{{ text_security }}</legend>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">{{ entry_2fa }}</label>
                          <div class=\"col-sm-10\">
                            <x-switch name=\"config_2fa\" value=\"1\" checked=\"{{ config_2fa }}\" input-id=\"input-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                            <div class=\"form-text\">{{ help_2fa }}</div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">{{ entry_login_attempts }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_login_attempts\" value=\"{{ config_login_attempts }}\" placeholder=\"{{ entry_login_attempts }}\" id=\"input-login-attempts\" class=\"form-control\"/>
                            <div class=\"form-text\">{{ help_login_attempts }}</div>
                            <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"overflow: auto;\">
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_uppercase\" value=\"1\" id=\"input-password-uppercase\" class=\"form-check-input\"{% if config_password_uppercase %} checked{% endif %}/> <label for=\"input-password-uppercase\" class=\"form-check-label\">{{ text_password_uppercase }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_lowercase\" value=\"1\" id=\"input-password-lowercase\" class=\"form-check-input\"{% if config_password_lowercase %} checked{% endif %}/> <label for=\"input-password-lowercase\" class=\"form-check-label\">{{ text_password_lowercase }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_number\" value=\"1\" id=\"input-password-number\" class=\"form-check-input\"{% if config_password_number %} checked{% endif %}/> <label for=\"input-password-number\" class=\"form-check-label\">{{ text_password_number }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_symbol\" value=\"1\" id=\"input-password-symbol\" class=\"form-check-input\"{% if config_password_symbol %} checked{% endif %}/> <label for=\"input-password-symbol\" class=\"form-check-label\">{{ text_password_symbol }}</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-password-length\" class=\"col-sm-2 col-form-label\">{{ entry_password_length }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_password_length\" value=\"{{ config_password_length }}\" placeholder=\"{{ entry_password_length }}\" id=\"input-password-length\" class=\"form-control\"/>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">{{ text_checkout }}</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">{{ entry_invoice_prefix }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"{{ config_invoice_prefix }}\" placeholder=\"{{ entry_invoice_prefix }}\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_invoice_prefix }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_shared }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_shared\" value=\"1\" checked=\"{{ config_shared }}\" input-id=\"input-shared\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_shared }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_cart_weight }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_cart_weight\" value=\"1\" checked=\"{{ config_cart_weight }}\" input-id=\"input-cart-weight\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_cart_weight }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_guest }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_guest\" value=\"1\" checked=\"{{ config_checkout_guest }}\" input-id=\"input-checkout-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_checkout_guest }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_payment_address }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_payment_address\" value=\"1\" checked=\"{{ config_checkout_payment_address }}\" input-id=\"input-checkout-payment-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_checkout_payment_address }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_shipping_address }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_shipping_address\" value=\"1\" checked=\"{{ config_checkout_shipping_address }}\" input-id=\"input-checkout-shipping-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_checkout_shipping_address }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">{{ entry_checkout }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_checkout_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_checkout }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">{{ entry_order_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_order_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_processing_status }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for order_status in order_statuses %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"{{ order_status.order_status_id }}\" id=\"input-processing-status-{{ order_status.order_status_id }}\" class=\"form-check-input\"{% if order_status.order_status_id in config_processing_status %} checked{% endif %}/> <label for=\"input-processing-status-{{ order_status.order_status_id }}\" class=\"form-check-label\">{{ order_status.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_processing_status }}</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_complete_status }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for order_status in order_statuses %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"{{ order_status.order_status_id }}\" id=\"input-complete-status-{{ order_status.order_status_id }}\" class=\"form-check-input\"{% if order_status.order_status_id in config_complete_status %} checked{% endif %}/> <label for=\"input-complete-status-{{ order_status.order_status_id }}\" class=\"form-check-label\">{{ order_status.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_complete_status }}</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-failed-status\" class=\"col-sm-2 col-form-label\">{{ entry_failed_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_failed_status_id\" id=\"input-failed-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_failed_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_failed_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-void-status\" class=\"col-sm-2 col-form-label\">{{ entry_void_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_void_status_id\" id=\"input-void-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_void_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_void_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">{{ entry_fraud_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_fraud_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_fraud_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">{{ entry_api }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for api in apis %}
                              <option value=\"{{ api.api_id }}\"{% if api.api_id == config_api_id %} selected{% endif %}>{{ api.username }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_api }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">{{ text_subscription }}</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_subscription }}</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_active_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_active_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_expired_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_expired_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-suspended-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_suspended_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_suspended_status_id\" id=\"input-subscription-suspended-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_suspended_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_canceled_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_canceled_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_failed_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_failed_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_denied_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_denied_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">{{ text_stock }}</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_display }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_display\" value=\"1\" checked=\"{{ config_stock_display }}\" input-id=\"input-stock-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_stock_display }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_warning }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_warning\" value=\"1\" checked=\"{{ config_stock_warning }}\" input-id=\"input-stock-warning\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_stock_warning }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_checkout }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_checkout\" value=\"1\" checked=\"{{ config_stock_checkout }}\" input-id=\"input-stock-checkout\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_stock_checkout }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">{{ entry_stock_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                            {% for stock_status in stock_statuses %}
                              <option value=\"{{ stock_status.stock_status_id }}\"{% if stock_status.stock_status_id == config_stock_status_id %} selected{% endif %}>{{ stock_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_stock_status }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">{{ text_affiliate }}</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_status }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_status\" checked=\"{{ config_affiliate_status }}\" value=\"1\" input-id=\"input-affiliate-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_affiliate_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_group }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == config_affiliate_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_approval }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_approval\" value=\"1\" checked=\"{{ config_affiliate_approval }}\" input-id=\"input-affiliate-approval\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_affiliate_approval }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_auto }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_auto\" value=\"1\" checked=\"{{ config_affiliate_auto }}\" input-id=\"input-affiliate-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_affiliate_auto }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_commission }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"{{ config_affiliate_commission }}\" placeholder=\"{{ entry_affiliate_commission }}\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_affiliate_commission }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-expire\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_expire }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_expire\" value=\"{{ config_affiliate_expire }}\" placeholder=\"{{ entry_affiliate_expire }}\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_affiliate_expire }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_affiliate_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_affiliate }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">{{ text_return }}</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">{{ entry_return_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            {% for return_status in return_statuses %}
                              <option value=\"{{ return_status.return_status_id }}\"{% if return_status.return_status_id == config_return_status_id %} selected{% endif %}>{{ return_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_return_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">{{ entry_return }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_return_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_return }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">{{ text_captcha }}</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">{{ entry_captcha }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            {% for captcha in captchas %}
                              <option value=\"{{ captcha.value }}\"{% if captcha.value == config_captcha %} selected{% endif %}>{{ captcha.text }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_captcha }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_captcha_page }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% set captcha_page_row = 0 %}
                            {% for captcha_page in captcha_pages %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"{{ captcha_page.value }}\" id=\"input-captcha-{{ captcha_page_row }}\" class=\"form-check-input\"{% if captcha_page.value in config_captcha_page %} checked{% endif %}/> <label for=\"input-captcha-{{ captcha_page_row }}\" class=\"form-check-label\">{{ captcha_page.text }}</label>
                              </div>
                              {% set captcha_page_row = captcha_page_row + 1 %}
                            {% endfor %}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">{{ entry_mail_engine }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"\">{{ text_none }}</option>
                      <option value=\"mail\"{% if config_mail_engine == 'mail' %} selected{% endif %}>{{ text_mail }}</option>
                      <option value=\"smtp\"{% if config_mail_engine == 'smtp' %} selected{% endif %}>{{ text_smtp }}</option>
                    </select>
                    <div class=\"form-text\">{{ help_mail_engine }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">{{ entry_mail_parameter }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"{{ config_mail_parameter }}\" placeholder=\"{{ entry_mail_parameter }}\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_parameter }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_smtp }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_hostname }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"{{ config_mail_smtp_hostname }}\" placeholder=\"{{ entry_mail_smtp_hostname }}\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_smtp_hostname }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_username }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"{{ config_mail_smtp_username }}\" placeholder=\"{{ entry_mail_smtp_username }}\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_password }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"{{ config_mail_smtp_password }}\" placeholder=\"{{ entry_mail_smtp_password }}\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_smtp_password }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_port }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"{{ config_mail_smtp_port }}\" placeholder=\"{{ entry_mail_smtp_port }}\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_timeout }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"{{ config_mail_smtp_timeout }}\" placeholder=\"{{ entry_mail_smtp_timeout }}\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_mail_alert }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_mail_alert }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% set mail_alert_row = 0 %}
                      {% for mail_alert in mail_alerts %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"{{ mail_alert.value }}\" id=\"input-mail-alert-{{ mail_alert_row }}\" class=\"form-check-input\"{% if mail_alert.value in config_mail_alert %} checked{% endif %}/> <label for=\"input-mail-alert-{{ mail_alert_row }}\" class=\"form-check-label\">{{ mail_alert.text }}</label>
                        </div>
                        {% set mail_alert_row = mail_alert_row + 1 %}
                      {% endfor %}
                    </div>
                    <div class=\"form-text\">{{ help_mail_alert }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">{{ entry_mail_alert_email }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"{{ entry_mail_alert_email }}\" id=\"input-mail-alert-email\" class=\"form-control\">{{ config_mail_alert_email }}</textarea>
                    <div class=\"form-text\">{{ help_mail_alert_email }}</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_maintenance }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_maintenance\" value=\"1\" checked=\"{{ config_maintenance }}\" input-id=\"input-maintenance\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_maintenance }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_seo_url }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_seo_url\" value=\"1\" checked=\"{{ config_seo_url }}\" input-id=\"input-seo-url\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_seo_url }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_security }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_user_2fa }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_user_2fa\" value=\"1\" checked=\"{{ config_user_2fa }}\" input-id=\"input-user-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_user_2fa }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-2fa-expire\" class=\"col-sm-2 col-form-label\">{{ entry_2fa_expire }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"number\" name=\"config_2fa_expire\" value=\"{{ config_2fa_expire }}\" id=\"input-2fa-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_2fa_expire }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"overflow: auto;\">
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_uppercase\" value=\"1\" id=\"input-user-password-uppercase\" class=\"form-check-input\"{% if config_user_password_uppercase %} checked{% endif %}/> <label for=\"input-user-password-uppercase\" class=\"form-check-label\">{{ text_password_uppercase }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_lowercase\" value=\"1\" id=\"input-user-password-lowercase\" class=\"form-check-input\"{% if config_user_password_lowercase %} checked{% endif %}/> <label for=\"input-user-password-lowercase\" class=\"form-check-label\">{{ text_password_lowercase }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_number\" value=\"1\" id=\"input-user-password-number\" class=\"form-check-input\"{% if config_user_password_number %} checked{% endif %}/> <label for=\"input-user-password-number\" class=\"form-check-label\">{{ text_password_number }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_symbol\" value=\"1\" id=\"input-user-password-symbol\" class=\"form-check-input\"{% if config_user_password_symbol %} checked{% endif %}/> <label for=\"input-user-password-symbol\" class=\"form-check-label\">{{ text_password_symbol }}</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-user-password-length\" class=\"col-sm-2 col-form-label\">{{ entry_password_length }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_user_password_length\" value=\"{{ config_user_password_length }}\" placeholder=\"{{ entry_password_length }}\" id=\"input-user-password-length\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_error }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_error_display }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_display\" value=\"1\" checked=\"{{ config_error_display }}\" input-id=\"input-error-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_error_log }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_log\" value=\"1\" checked=\"{{ config_error_log }}\" input-id=\"input-error-log\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting.theme&user_token={{ user_token }}&theme=' + this.value,
        dataType: 'html',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');

// Dynamic required validation for language tabs
\$('form').on('submit', function(e) {
    // Remove all required attributes first
    \$('input[name*=\"[meta_title]\"]').removeAttr('required');
    
    // Add required only to visible/active tab
    \$('.tab-pane.active input[name*=\"[meta_title]\"]').attr('required', true);
});

// Handle tab switching
\$('a[data-bs-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
    // Remove required from all meta_title inputs
    \$('input[name*=\"[meta_title]\"]').removeAttr('required');
    
    // Add required to active tab only
    \$(\$(e.target).attr('href')).find('input[name*=\"[meta_title]\"]').attr('required', true);
});

// Initialize - set required for first active tab
\$(document).ready(function() {
    \$('.tab-pane.active input[name*=\"[meta_title]\"]').attr('required', true);
});
//--></script>
{{ footer }}
", "adminoc/view/template/setting/setting.twig", "D:\\xampp\\htdocs\\opencart\\upload\\adminoc\\view\\template\\setting\\setting.twig");
    }
}
