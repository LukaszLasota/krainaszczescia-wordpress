(window["aioseopjsonp"]=window["aioseopjsonp"]||[]).push([["monsterinsights-Main-vue","monsterinsights-Monsterinsights-vue"],{"24ef":function(t,s,i){t.exports=i.p+"img/em.png"},"4d8e":function(t,s,i){"use strict";i.r(s);var e=function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"aioseo-analytics"},[e("div",{staticClass:"aioseo-wrap aioseo-plugin-landing",attrs:{id:"aioseo-analytics"}},[e("section",{staticClass:"aioseo-card aioseo-card--intro"},[e("div",{staticClass:"content aioseo-analytics__intro"},[t.prefersEm?[e("div",{staticClass:"intro-image"},[e("svg-aioseo-logo-gear"),e("span",[t._v("♥")]),e("img",{attrs:{src:i("24ef"),height:"90",alt:"ExactMetrics"}})],1),e("h2",{staticClass:"intro-heading"},[t._v(" "+t._s(t.strings.emIntroH)+" ")]),e("p",[t._v(" "+t._s(t.strings.emIntroP)+" ")]),e("div",{staticClass:"preview-list"},[e("img",{attrs:{src:i("8fd0"),height:"200",alt:"mi-graph-preview"}}),e("ul",[e("li",[e("svg-circle-check"),t._v(" "+t._s(t.strings.emIntroLi1)+" ")],1),e("li",[e("svg-circle-check"),t._v(" "+t._s(t.strings.emIntroLi2)+" ")],1),e("li",[e("svg-circle-check"),t._v(" "+t._s(t.strings.emIntroLi3)+" ")],1)])])]:[e("div",{staticClass:"intro-image"},[e("svg-aioseo-logo-gear"),e("span",[t._v("♥")]),e("img",{attrs:{src:i("e71d"),height:"90",alt:"MonsterInsights"}})],1),e("h2",{staticClass:"intro-heading"},[t._v(" "+t._s(t.strings.miIntroH)+" ")]),e("p",[t._v(" "+t._s(t.strings.miIntroP)+" ")]),e("div",{staticClass:"preview-list"},[e("img",{attrs:{src:i("64ed"),height:"200",alt:"mi-graph-preview"}}),e("ul",[e("li",[e("svg-circle-check"),t._v(" "+t._s(t.strings.miIntroLi1)+" ")],1),e("li",[e("svg-circle-check"),t._v(" "+t._s(t.strings.miIntroLi2)+" ")],1),e("li",[e("svg-circle-check"),t._v(" "+t._s(t.strings.miIntroLi3)+" ")],1),e("li",[e("svg-circle-check"),t._v(" "+t._s(t.strings.miIntroLi4)+" ")],1)])])]],2)]),e("section",{class:t.justInstalled||t.gaActivated?"aioseo-card step step--completed":"aioseo-card step step--current"},[t._m(0),e("div",{staticClass:"content"},[e("h2",{staticClass:"step-title"},[t.gaInstalled?t._e():[t._v(t._s(t.strings.miemInstallH)+" ")],t.prefersEm?[t._v(t._s(t.strings.emInstallH))]:[t._v(t._s(t.strings.miInstallH))]],2),e("p",[t.prefersEm?[t._v(t._s(t.strings.emInstallP))]:[t._v(t._s(t.strings.miInstallP))]],2),t.$aioseo.plugins.miLite.canInstall?t._e():e("base-button",{attrs:{type:"blue",size:"medium",tag:"a",target:"_blank",href:t.$aioseo.plugins.miLite.wpLink}},[e("svg-external"),t._v(" "+t._s(t.strings.installMi)+" ")],1),t.$aioseo.plugins.miLite.canInstall?e("base-button",{attrs:{loading:t.installingPlugin,type:t.justInstalled||t.gaActivated?"disabled":"blue",size:"medium"},on:{click:t.installMi}},[t.justInstalled||t.gaInstalled?t._e():e("span",[t._v(t._s(t.strings.installMi))]),!t.justInstalled&&!t.gaActivated||t.prefersEm?t._e():e("span",[t._v(t._s(t.strings.miInstalled))]),(t.justInstalled||t.gaActivated)&&t.prefersEm?e("span",[t._v(t._s(t.strings.emInstalled))]):t._e(),t.justInstalled||!t.gaInstalled||t.gaActivated||t.prefersEm?t._e():e("span",[t._v(t._s(t.strings.activateMi))]),!t.justInstalled&&t.gaInstalled&&!t.gaActivated&&t.prefersEm?e("span",[t._v(t._s(t.strings.activateEm))]):t._e()]):t._e()],1)]),e("section",{class:t.justInstalled||t.gaActivated?"aioseo-card step step--current":"aioseo-card step step--pending"},[t._m(1),e("div",{staticClass:"content"},[t.prefersEm?[e("h2",{staticClass:"step-title"},[t._v(t._s(t.strings.emWizardH))]),e("p",{staticClass:"step-body"},[t._v(t._s(t.strings.emWizardP))])]:[e("h2",{staticClass:"step-title"},[t._v(t._s(t.strings.miWizardH))]),e("p",{staticClass:"step-body"},[t._v(t._s(t.strings.miWizardP))])],e("base-button",{attrs:{disabled:!t.justInstalled&&!t.gaActivated,type:"blue",size:"medium",tag:"a",href:t.miOnboardingUrl}},[t._v(" "+t._s(t.strings.setupGA)+" ")])],2)])])])},n=[function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("div",{staticClass:"step-count"},[i("span",{staticClass:"step-count__num"},[t._v("1")])])},function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("div",{staticClass:"step-count"},[i("span",{staticClass:"step-count__num"},[t._v("2")])])}],a=i("5530"),r=i("2f62"),o={data:function(){return{installingPlugin:!1,justInstalled:!1,strings:{miLink:this.$t.sprintf("<strong>%1$s</strong>",this.$t.__("Click here",this.$td)),installMi:this.$t.sprintf(this.$t.__("Install %1$s",this.$td),"MonsterInsights"),activateMi:this.$t.sprintf(this.$t.__("Activate %1$s",this.$td),"MonsterInsights"),activateEm:this.$t.sprintf(this.$t.__("Activate %1$s",this.$td),"ExactMetrics"),miInstalled:this.$t.sprintf(this.$t.__("%1$s is Installed & Active",this.$td),"MonsterInsights"),emInstalled:this.$t.sprintf(this.$t.__("%1$s is Installed & Active",this.$td),"ExactMetrics"),setupGA:this.$t.__("Launch Setup Wizard",this.$td),emIntroH:this.$t.__("The Best Google Analytics Plugin for WordPress",this.$td),emIntroP:this.$t.sprintf(this.$t.__("%1$s connects AIOSEO to Google Analytics, providing a powerful integration. %2$s is a sister company of AIOSEO.",this.$td),"ExactMetrics","ExactMetrics"),emIntroLi1:this.$t.__("Quick & Easy Google Analytics Setup",this.$td),emIntroLi2:this.$t.__("Google Analytics Dashboard + Real Time Stats",this.$td),emIntroLi3:this.$t.__("Google Analytics Enhanced Ecommerce Tracking",this.$td),emInstallH:this.$t.sprintf(this.$t.__("Activate %1$s",this.$td),"ExactMetrics"),emInstallP:this.$t.sprintf(this.$t.__("%1$s shows you exactly which content gets the most visits, so you can analyze and optimize it for higher conversions.",this.$td),"ExactMetrics"),miIntroH:this.$t.__("The Best Google Analytics Plugin for WordPress",this.$td),miIntroP:this.$t.sprintf(this.$t.__("%1$s connects AIOSEO to Google Analytics, providing a powerful integration. %2$s is a sister company of AIOSEO.",this.$td),"MonsterInsights","MonsterInsights"),miIntroLi1:this.$t.__("Quick & Easy Google Analytics Setup",this.$td),miIntroLi2:this.$t.__("Google Analytics Dashboard + Real Time Stats",this.$td),miIntroLi3:this.$t.__("Google Analytics Enhanced Ecommerce Tracking",this.$td),miIntroLi4:this.$t.__("Universal Tracking for AMP and Instant Articles",this.$td),miemInstallH:this.$t.__("Install &",this.$td),miInstallH:this.$t.sprintf(this.$t.__("Activate %1$s",this.$td),"MonsterInsights"),miInstallP:this.$t.sprintf(this.$t.__("%1$s shows you exactly which content gets the most visits, so you can analyze and optimize it for higher conversions.",this.$td),"MonsterInsights"),emWizardH:this.$t.sprintf(this.$t.__("Setup %1$s",this.$td),"ExactMetrics"),miWizardH:this.$t.sprintf(this.$t.__("Setup %1$s",this.$td),"MonsterInsights"),emWizardP:this.$t.sprintf(this.$t.__("%1$s has an intuitive setup wizard to guide you through the setup process.",this.$td),"ExactMetrics"),miWizardP:this.$t.sprintf(this.$t.__("%1$s has an intuitive setup wizard to guide you through the setup process.",this.$td),"MonsterInsights")}}},computed:Object(a["a"])(Object(a["a"])({},Object(r["e"])(["options","internalOptions"])),{},{gaActivated:function(){return this.$aioseo.plugins.miLite.activated||this.$aioseo.plugins.emLite.activated||this.$aioseo.plugins.miPro.activated||this.$aioseo.plugins.emPro.activated},gaInstalled:function(){return this.$aioseo.plugins.miLite.installed||this.$aioseo.plugins.emLite.installed||this.$aioseo.plugins.miPro.installed||this.$aioseo.plugins.emPro.installed},miOnboardingUrl:function(){return this.prefersEm?"".concat(this.$aioseo.urls.home,"/wp-admin/admin.php?page=exactmetrics-onboarding"):"".concat(this.$aioseo.urls.home,"/wp-admin/admin.php?page=monsterinsights-onboarding")},prefersEm:function(){return(this.$aioseo.plugins.emLite.installed||this.$aioseo.plugins.emPro.installed)&&!this.$aioseo.plugins.miLite.installed&&!this.$aioseo.plugins.miPro.installed}}),methods:Object(a["a"])(Object(a["a"])({},Object(r["b"])(["installPlugins"])),{},{installMi:function(){var t=this;this.installingPlugin=!0,this.installPlugins([{plugin:this.prefersEm?"emLite":"miLite",type:"plugin"}]).then((function(){t.installingPlugin=!1,t.justInstalled=!0,t.$aioseo.plugins.miLite.activated=!0,window.aioseo.plugins.miLite.activated=!0})).catch((function(t){console.error(t)}))}})},l=o,c=(i("ff0b"),i("2877")),h=Object(c["a"])(l,e,n,!1,null,null,null);s["default"]=h.exports},"64ed":function(t,s,i){t.exports=i.p+"img/mi-graph-preview.png"},8679:function(t,s,i){"use strict";i.r(s);var e=function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("core-main",{attrs:{"page-name":t.strings.pageName,"show-tabs":!1,"show-save-button":!1}},[i("monsterinsights")],1)},n=[],a=i("4d8e"),r={components:{Monsterinsights:a["default"]},data:function(){return{strings:{pageName:this.$t.__("Analytics",this.$td)}}}},o=r,l=i("2877"),c=Object(l["a"])(o,e,n,!1,null,null,null);s["default"]=c.exports},8834:function(t,s,i){},"8fd0":function(t,s,i){t.exports=i.p+"img/em-graph-preview.png"},e71d:function(t,s,i){t.exports=i.p+"img/mi-logo.png"},ff0b:function(t,s,i){"use strict";var e=i("8834"),n=i.n(e);n.a}}]);