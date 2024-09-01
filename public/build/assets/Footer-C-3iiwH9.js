import{_ as h}from"./ResponsiveNavLink-CGPpen5r.js";import{x,B as f,o as n,c as a,a as e,m as d,l as s,b as _,q as r,k as o,n as v,F as w}from"./app-CjOUruHE.js";import{_ as m}from"./_plugin-vue_export-helper-DlAUqK2U.js";const k="/build/assets/shopping-basket-CacjOMSP.svg",y="/build/assets/account-circle-CjCrNLc4.svg",$="/build/assets/logo-2-CNWPSZFW.svg",C="/build/assets/close-menu-eU39NAHC.svg",N="/build/assets/hamburger-menu-6d_Ll4XL.svg",L={name:"Header",components:{ResponsiveNavLink:h},props:{opacity:{type:String,default:"bg-opacity-20"},position:{type:String,default:"absolute"}},data(){return{hamburgerMenuIsOpen:!1}},computed:{user(){return this.$page.props.auth.user}},methods:{logout(){x.post(route("logout"))}}},M={class:"flex gap-4 ml-4 items-center grow basis-0"},B=e("img",{src:k,alt:"panier d'achat",class:"cursor-pointer bg-white rounded-full p-2 hover:bg-amber-200 transition ease-in-out duration-300"},null,-1),j=e("img",{src:y,alt:"avatar du profil",class:"cursor-pointer bg-white rounded-full p-2 hover:bg-amber-200 transition ease-in-out duration-300"},null,-1),I={class:"h-120 flex justify-center"},O=e("img",{src:$,alt:"logo",class:"h-120 w-auto cursor-pointer scale-90"},null,-1),F={class:"flex justify-end items-center grow basis-0"},R={class:"hidden md:flex justify-between mr-8 gap-6"},H={class:"text-sm xl:text-xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1"},V={class:"text-sm xl:text-xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1"},A={key:0,class:"h-screen md:hidden absolute top-[120px] py-10 z-50 w-full bg-black bg-opacity-30"},S={class:"flex flex-col md:flex-row gap-4 items-center w-full h-3/5"},q={class:"text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full"},z={class:"text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full"},P={class:"text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full"},G={class:"text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full"},U={class:"text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full"},W={class:"text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full"},E={class:"text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full"};function Q(p,l,c,g,i,u){const t=f("ResponsiveNavLink");return n(),a(w,null,[e("header",{class:v(`flex h-120 w-full justify-between ${c.position} top-0 z-50 bg-black ${c.opacity}`)},[e("div",M,[u.user?(n(),d(t,{key:0,href:`/cart/${u.user.id}`},{default:s(()=>[B]),_:1},8,["href"])):_("",!0),u.user?(n(),d(t,{key:1,href:"/dashboard"},{default:s(()=>[j]),_:1})):(n(),d(t,{key:2,href:"/login",class:"text-sm xl:text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1"},{default:s(()=>[r(" Se connecter ")]),_:1}))]),e("div",I,[o(t,{href:"/"},{default:s(()=>[O]),_:1})]),e("nav",F,[i.hamburgerMenuIsOpen?(n(),a("img",{key:0,src:C,alt:"menu de navigation",class:"h-45 w-45 cursor-pointer mr-4 md:hidden",onClick:l[0]||(l[0]=b=>i.hamburgerMenuIsOpen=!i.hamburgerMenuIsOpen)})):(n(),a("img",{key:1,src:N,alt:"menu de navigation",class:"h-45 w-45 cursor-pointer mr-4 md:hidden",onClick:l[1]||(l[1]=b=>i.hamburgerMenuIsOpen=!i.hamburgerMenuIsOpen)})),e("ul",R,[e("li",H,[o(t,{href:"/"},{default:s(()=>[r("Accueil")]),_:1})]),e("li",V,[o(t,{href:"/billets"},{default:s(()=>[r("Billets")]),_:1})])])])],2),i.hamburgerMenuIsOpen==!0?(n(),a("nav",A,[e("ul",S,[e("li",q,[o(t,{href:"/"},{default:s(()=>[r("Relais de la flamme")]),_:1})]),e("li",z,[o(t,{href:"/"},{default:s(()=>[r("Calendrier")]),_:1})]),e("li",P,[o(t,{href:"/"},{default:s(()=>[r("Accueil")]),_:1})]),e("li",G,[o(t,{href:"/billets"},{default:s(()=>[r("Billets")]),_:1})]),e("li",U,[o(t,{href:"/"},{default:s(()=>[r("Boutique")]),_:1})]),e("li",W,[o(t,{href:"/"},{default:s(()=>[r("Hospitalité")]),_:1})]),e("li",E,[o(t,{href:"/"},{default:s(()=>[r("Langues")]),_:1})])])])):_("",!0)],64)}const pe=m(L,[["render",Q]]),T="/build/assets/facebook-logo-4ML6HANq.svg",X="/build/assets/youtube-logo-wxzmnbkt.svg",Z="/build/assets/x-logo-BnQ_tnIc.svg",D="/build/assets/instagram-logo-BscIcriV.svg",J={name:"Footer",components:{ResponsiveNavLink:h}},K={class:"bg-black py-8 px-4 flex flex-col sm:flex-row sm:justify-between md:px-14 gap-4 items-center"},Y={class:"flex"},ee={class:"flex justify-between gap-4 mb-10 sm:mb-0 w-full"},te={class:"text-white text-sm xl:text-md hover:underline underline-offset-8 decoration-2 cursor-pointer"},se={class:"text-white text-sm xl:text-md hover:underline underline-offset-8 decoration-2 cursor-pointer"},oe={class:"text-white text-sm xl:text-md hover:underline underline-offset-8 decoration-2 cursor-pointer"},re={class:"text-white text-sm xl:text-md hover:underline underline-offset-8 decoration-2 cursor-pointer"},ne={class:"text-white text-sm xl:text-md hover:underline underline-offset-8 decoration-2 cursor-pointer"},ie={class:"flex justify-between w-1/2 md:w-1/4"},le=e("img",{src:T,alt:"logo facebook",class:"cursor-pointer"},null,-1),ae=e("img",{src:X,alt:"logo youtube",class:"cursor-pointer"},null,-1),ue=e("img",{src:Z,alt:"logo x twitter",class:"cursor-pointer"},null,-1),ce=e("img",{src:D,alt:"logo instagram",class:"cursor-pointer"},null,-1),de=e("p",{class:"text-white text-sm xl:text-md"},"Copyrights 2024 MarcAu",-1);function _e(p,l,c,g,i,u){const t=f("ResponsiveNavLink");return n(),a("footer",K,[e("nav",Y,[e("ul",ee,[e("li",te,[o(t,{href:"/cgv"},{default:s(()=>[r("CGV")]),_:1})]),e("li",se,[o(t,{href:"/cgu"},{default:s(()=>[r("CGU")]),_:1})]),e("li",oe,[o(t,{href:"/rgpd"},{default:s(()=>[r("Politique de confidentialité")]),_:1})]),e("li",re,[o(t,{href:"/legals"},{default:s(()=>[r("Mentions légales")]),_:1})]),e("li",ne,[o(t,{href:"/contact"},{default:s(()=>[r("Contact")]),_:1})])])]),e("div",ie,[o(t,{href:"/"},{default:s(()=>[le]),_:1}),o(t,{href:"/"},{default:s(()=>[ae]),_:1}),o(t,{href:"/"},{default:s(()=>[ue]),_:1}),o(t,{href:"/"},{default:s(()=>[ce]),_:1})]),de])}const ge=m(J,[["render",_e]]);export{ge as F,pe as H};
