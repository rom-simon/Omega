<?php

/* CoursBundle:Default:liste.html.twig */
class __TwigTemplate_b827c63c4e592bcc1cfdc3f28ce448613b3a1667556f5f38c729662edcd5bd76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("siteBundle::base.html.twig", "CoursBundle:Default:liste.html.twig", 1);
        $this->blocks = array(
            'filtre' => array($this, 'block_filtre'),
            'titre_page' => array($this, 'block_titre_page'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "siteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fd52c9141b35812a9897b23ba67581d86264f203d8bbb8c5121dbda5e50ace0 = $this->env->getExtension("native_profiler");
        $__internal_1fd52c9141b35812a9897b23ba67581d86264f203d8bbb8c5121dbda5e50ace0->enter($__internal_1fd52c9141b35812a9897b23ba67581d86264f203d8bbb8c5121dbda5e50ace0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoursBundle:Default:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd52c9141b35812a9897b23ba67581d86264f203d8bbb8c5121dbda5e50ace0->leave($__internal_1fd52c9141b35812a9897b23ba67581d86264f203d8bbb8c5121dbda5e50ace0_prof);

    }

    // line 2
    public function block_filtre($context, array $blocks = array())
    {
        $__internal_afa4fbcdb321713b32b223fea19138cf4fb6fb172bd1eb5712019f34cd851ec1 = $this->env->getExtension("native_profiler");
        $__internal_afa4fbcdb321713b32b223fea19138cf4fb6fb172bd1eb5712019f34cd851ec1->enter($__internal_afa4fbcdb321713b32b223fea19138cf4fb6fb172bd1eb5712019f34cd851ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filtre"));

        // line 3
        echo "<!--<div class=\"col-lg-10 col-sm-9\" id=\"filtre\">
<div class=\"col-sm-2\">
\t<ul id=\"menu\">
\t\t<li><a href=\"#\">FILTRER PAR<span class=\"caret\"></span></a>
\t\t    <ul>
\t\t        <p>Cours</p>
\t\t        <form action=\"\">
\t\t            <div class=\"col-lg-12 col-md-6 col-sm-3\">
\t\t            <li><input type=\"checkbox\" />Anglais</li>
\t\t            <li><input type=\"checkbox\" />Communication</li>
\t\t            <li><input type=\"checkbox\" />Esthétique</li>
\t\t            <li><input type=\"checkbox\" />Métiers nuériques</li>
\t\t            <li><input type=\"checkbox\" />Conduite de projet</li>
\t\t            <li><input type=\"checkbox\" />PPP</li>
\t\t            <li><input type=\"checkbox\" />Environnement juridique</li>
\t\t            <li><input type=\"checkbox\" />Culture scientifique</li>
\t\t            <li><input type=\"checkbox\" />Développement</li>
\t\t            <li><input type=\"checkbox\" />Programmation orienté objet</li>
\t\t            <li><input type=\"checkbox\" />Réseau</li>
\t\t            <li><input type=\"checkbox\" />Infographie</li>
\t\t            <li><input type=\"checkbox\" />Intégraption</li>
\t\t            <li><input type=\"checkbox\" />Audiovisuel</li>
\t\t            <li><input type=\"checkbox\" />PHP</li>
\t\t            <br>
\t\t            <p>Evaluation</p>
\t\t            <li><input type=\"checkbox\" />Quizz</li>
\t\t            <li><input type=\"checkbox\" />Exercices</li>
\t\t            <li><input type=\"checkbox\" />Exercices corrigés</li>
\t\t            <br>
\t\t            <p>Semestres</p>
\t\t            <div class=\"col-xs-6\">
\t\t            <li><input type=\"checkbox\" />S1</li>
\t\t            <li><input type=\"checkbox\" />S2</li>
\t\t            <li><input type=\"checkbox\" />S3</li>
\t\t            <li><input type=\"checkbox\" />S4</li>
\t\t            </div>
\t\t            <div class=\"col-xs-6\">
\t\t            <li><input type=\"checkbox\" />S1D</li>
\t\t            <li><input type=\"checkbox\" />S2D</li>
\t\t            <li><input type=\"checkbox\" />S3D</li>
\t\t            <li><input type=\"checkbox\" />S4D</li>
\t\t        </form>
\t\t    </ul>
\t\t</li>
\t</ul>
</div>
<div class=\"col-sm-10\"></div>                  
</div>-->
<div class=\"col-lg-10 col-sm-9\" id=\"filtre\">
    <div class=\"col-sm-2\">
    <ul class=\"nav nav-pills nav-stacked\">
\t    <li class=\"dropdown\">
\t        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">FILTRER PAR
\t            <span class=\"caret\"></span></a>
\t        <ul class=\"dropdown-menu\">
\t            <li><a href=\"#\">Ajouter</a></li>
\t            <li><a href=\"#\">Editer</a></li>
\t            <li><a href=\"#\">Supprimer</a></li>
\t        </ul>
\t    </li>          
    </ul>
    </div>
    <div class=\"col-sm-10\"></div>                  
</div>
";
        
        $__internal_afa4fbcdb321713b32b223fea19138cf4fb6fb172bd1eb5712019f34cd851ec1->leave($__internal_afa4fbcdb321713b32b223fea19138cf4fb6fb172bd1eb5712019f34cd851ec1_prof);

    }

    // line 68
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_eae3d24f9110ee9a1e4526e0c96b6ed1112213214f6959456364fedbbf71be89 = $this->env->getExtension("native_profiler");
        $__internal_eae3d24f9110ee9a1e4526e0c96b6ed1112213214f6959456364fedbbf71be89->enter($__internal_eae3d24f9110ee9a1e4526e0c96b6ed1112213214f6959456364fedbbf71be89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        echo "<h1>Liste des cours</h1><hr>";
        
        $__internal_eae3d24f9110ee9a1e4526e0c96b6ed1112213214f6959456364fedbbf71be89->leave($__internal_eae3d24f9110ee9a1e4526e0c96b6ed1112213214f6959456364fedbbf71be89_prof);

    }

    // line 69
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ec81c1ea50d26d7fd306fb73327248796ae5f1b40f0e2801bfeaa6fbe2159481 = $this->env->getExtension("native_profiler");
        $__internal_ec81c1ea50d26d7fd306fb73327248796ae5f1b40f0e2801bfeaa6fbe2159481->enter($__internal_ec81c1ea50d26d7fd306fb73327248796ae5f1b40f0e2801bfeaa6fbe2159481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 71
            echo "    <div class=\"col-lg-12 cours\">
\t        <div class=\"col-lg-8\">
\t        <h2>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "intitulecours", array()), "html", null, true);
            echo "</h2>
\t        <p><b>Publié le: ";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cour"], "datedcours", array()), "d M Y"), "html", null, true);
            echo " / Prendra fin le: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cour"], "datefcours", array()), "d M Y"), "html", null, true);
            echo "</b></p>
\t        <p>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "introcours", array()), "html", null, true);
            echo "</p>
\t    \t</div>
\t        <div class=\"col-lg-4\"><img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "imagecours", array()), "html", null, true);
            echo "\" class=\"img-responsive center-block\">
\t        </div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ec81c1ea50d26d7fd306fb73327248796ae5f1b40f0e2801bfeaa6fbe2159481->leave($__internal_ec81c1ea50d26d7fd306fb73327248796ae5f1b40f0e2801bfeaa6fbe2159481_prof);

    }

    public function getTemplateName()
    {
        return "CoursBundle:Default:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 77,  149 => 75,  143 => 74,  139 => 73,  135 => 71,  131 => 70,  125 => 69,  113 => 68,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'siteBundle::base.html.twig' %}*/
/* {% block filtre %}*/
/* <!--<div class="col-lg-10 col-sm-9" id="filtre">*/
/* <div class="col-sm-2">*/
/* 	<ul id="menu">*/
/* 		<li><a href="#">FILTRER PAR<span class="caret"></span></a>*/
/* 		    <ul>*/
/* 		        <p>Cours</p>*/
/* 		        <form action="">*/
/* 		            <div class="col-lg-12 col-md-6 col-sm-3">*/
/* 		            <li><input type="checkbox" />Anglais</li>*/
/* 		            <li><input type="checkbox" />Communication</li>*/
/* 		            <li><input type="checkbox" />Esthétique</li>*/
/* 		            <li><input type="checkbox" />Métiers nuériques</li>*/
/* 		            <li><input type="checkbox" />Conduite de projet</li>*/
/* 		            <li><input type="checkbox" />PPP</li>*/
/* 		            <li><input type="checkbox" />Environnement juridique</li>*/
/* 		            <li><input type="checkbox" />Culture scientifique</li>*/
/* 		            <li><input type="checkbox" />Développement</li>*/
/* 		            <li><input type="checkbox" />Programmation orienté objet</li>*/
/* 		            <li><input type="checkbox" />Réseau</li>*/
/* 		            <li><input type="checkbox" />Infographie</li>*/
/* 		            <li><input type="checkbox" />Intégraption</li>*/
/* 		            <li><input type="checkbox" />Audiovisuel</li>*/
/* 		            <li><input type="checkbox" />PHP</li>*/
/* 		            <br>*/
/* 		            <p>Evaluation</p>*/
/* 		            <li><input type="checkbox" />Quizz</li>*/
/* 		            <li><input type="checkbox" />Exercices</li>*/
/* 		            <li><input type="checkbox" />Exercices corrigés</li>*/
/* 		            <br>*/
/* 		            <p>Semestres</p>*/
/* 		            <div class="col-xs-6">*/
/* 		            <li><input type="checkbox" />S1</li>*/
/* 		            <li><input type="checkbox" />S2</li>*/
/* 		            <li><input type="checkbox" />S3</li>*/
/* 		            <li><input type="checkbox" />S4</li>*/
/* 		            </div>*/
/* 		            <div class="col-xs-6">*/
/* 		            <li><input type="checkbox" />S1D</li>*/
/* 		            <li><input type="checkbox" />S2D</li>*/
/* 		            <li><input type="checkbox" />S3D</li>*/
/* 		            <li><input type="checkbox" />S4D</li>*/
/* 		        </form>*/
/* 		    </ul>*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
/* <div class="col-sm-10"></div>                  */
/* </div>-->*/
/* <div class="col-lg-10 col-sm-9" id="filtre">*/
/*     <div class="col-sm-2">*/
/*     <ul class="nav nav-pills nav-stacked">*/
/* 	    <li class="dropdown">*/
/* 	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">FILTRER PAR*/
/* 	            <span class="caret"></span></a>*/
/* 	        <ul class="dropdown-menu">*/
/* 	            <li><a href="#">Ajouter</a></li>*/
/* 	            <li><a href="#">Editer</a></li>*/
/* 	            <li><a href="#">Supprimer</a></li>*/
/* 	        </ul>*/
/* 	    </li>          */
/*     </ul>*/
/*     </div>*/
/*     <div class="col-sm-10"></div>                  */
/* </div>*/
/* {% endblock %} */
/* {% block titre_page %}<h1>Liste des cours</h1><hr>{% endblock %}   */
/* {% block contenu %}*/
/* {% for cour in cours %}*/
/*     <div class="col-lg-12 cours">*/
/* 	        <div class="col-lg-8">*/
/* 	        <h2>{{ cour.intitulecours }}</h2>*/
/* 	        <p><b>Publié le: {{ cour.datedcours|date('d M Y') }} / Prendra fin le: {{ cour.datefcours|date('d M Y') }}</b></p>*/
/* 	        <p>{{ cour.introcours }}</p>*/
/* 	    	</div>*/
/* 	        <div class="col-lg-4"><img src="{{ cour.imagecours }}" class="img-responsive center-block">*/
/* 	        </div>*/
/*     </div>*/
/* */
/* {% endfor %}*/
/* {% endblock %}*/