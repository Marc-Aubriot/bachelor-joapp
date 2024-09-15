import{_ as h}from"./ResponsiveNavLink-Bqu6smUF.js";import{x,z as p,o as r,c as i,a as e,m as d,l as s,t as v,b as f,q as n,k as o,n as w,F as k}from"./app-sxmKPskq.js";import{_ as m}from"./_plugin-vue_export-helper-DlAUqK2U.js";const y={name:"Header",components:{ResponsiveNavLink:h},props:{opacity:{type:String,default:"bg-opacity-20"},position:{type:String,default:"absolute"},ticketsCount:{type:Number,default:0}},data(){return{hamburgerMenuIsOpen:!1}},computed:{user(){return this.$page.props.auth.user}},methods:{logout(){x.post(route("logout"))}}},$={class:"flex gap-4 ml-4 items-center grow basis-0"},C=e("img",{src:"../../public/assets/shopping-basket.svg",alt:"panier d'achat",class:"cursor-pointer bg-white rounded-full p-2 hover:bg-amber-200 transition ease-in-out duration-300 relative"},null,-1),N={key:0,class:"flex justify-center items-center rounded-full bg-orange-400 w-[20px] h-[20px] absolute bottom-8 left-14"},M=e("img",{src:"../../public/assets/account-circle.svg",alt:"avatar du profil",class:"cursor-pointer bg-white rounded-full p-2 hover:bg-amber-200 transition ease-in-out duration-300"},null,-1),j={class:"h-120 flex justify-center"},I=e("img",{src:"../../public/assets/logo-2.svg",alt:"logo",class:"h-120 w-auto cursor-pointer scale-90"},null,-1),O={class:"flex justify-end items-center grow basis-0"},B={class:"hidden md:flex justify-between mr-8 gap-6"},F={class:"text-sm xl:text-xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1"},L={class:"text-sm xl:text-xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1"},R={key:0,class:"h-screen md:hidden absolute top-[120px] py-10 z-50 w-full bg-black bg-opacity-30"},V={class:"flex flex-col md:flex-row gap-4 items-center w-full h-3/5"},z={class:"text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full"},S={class:"text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full"};function A(_,a,c,g,l,u){const t=p("ResponsiveNavLink");return r(),i(k,null,[e("header",{class:w(`flex h-120 w-full justify-between ${c.position} top-0 z-50 bg-black ${c.opacity}`)},[e("div",$,[u.user?(r(),d(t,{key:0,href:`/cart/${u.user.id}`},{default:s(()=>[C,c.ticketsCount>0?(r(),i("span",N,v(c.ticketsCount),1)):f("",!0)]),_:1},8,["href"])):f("",!0),u.user?(r(),d(t,{key:1,href:"/dashboard"},{default:s(()=>[M]),_:1})):(r(),d(t,{key:2,href:"/login",class:"text-sm xl:text-2xl hover:bg-amber-200 transition ease-in-out duration-300 cursor-pointer bg-white p-4 rounded-full line-clamp-1"},{default:s(()=>[n(" Se connecter ")]),_:1}))]),e("div",j,[o(t,{href:"/"},{default:s(()=>[I]),_:1})]),e("nav",O,[l.hamburgerMenuIsOpen?(r(),i("img",{key:0,src:"../../public/assets/close-menu.svg",alt:"menu de navigation",class:"h-45 w-45 cursor-pointer mr-4 md:hidden",onClick:a[0]||(a[0]=b=>l.hamburgerMenuIsOpen=!l.hamburgerMenuIsOpen)})):(r(),i("img",{key:1,src:"../../public/assets/hamburger-menu.svg",alt:"menu de navigation",class:"h-45 w-45 cursor-pointer mr-4 md:hidden",onClick:a[1]||(a[1]=b=>l.hamburgerMenuIsOpen=!l.hamburgerMenuIsOpen)})),e("ul",B,[e("li",F,[o(t,{href:"/"},{default:s(()=>[n("Accueil")]),_:1})]),e("li",L,[o(t,{href:"/billets"},{default:s(()=>[n("Billets")]),_:1})])])])],2),l.hamburgerMenuIsOpen==!0?(r(),i("nav",R,[e("ul",V,[e("li",z,[o(t,{href:"/"},{default:s(()=>[n("Accueil")]),_:1})]),e("li",S,[o(t,{href:"/billets"},{default:s(()=>[n("Billets")]),_:1})])])])):f("",!0)],64)}const ne=m(y,[["render",A]]),H={name:"Footer",components:{ResponsiveNavLink:h}},q={class:"bg-black py-8 px-4 flex flex-col sm:flex-row sm:justify-between md:px-14 gap-4 items-center"},G={class:"flex"},D={class:"flex justify-between gap-4 mb-10 sm:mb-0 w-full"},E={class:"text-white text-sm xl:text-md hover:underline underline-offset-8 decoration-2 cursor-pointer"},P={class:"text-white text-sm xl:text-md hover:underline underline-offset-8 decoration-2 cursor-pointer"},T={class:"text-white text-sm xl:text-md hover:underline underline-offset-8 decoration-2 cursor-pointer"},U={class:"text-white text-sm xl:text-md hover:underline underline-offset-8 decoration-2 cursor-pointer"},J={class:"text-white text-sm xl:text-md hover:underline underline-offset-8 decoration-2 cursor-pointer"},K={class:"flex justify-between w-1/2 md:w-1/4"},Q=e("img",{src:"../../public/assets/facebook-logo.svg",alt:"logo facebook",class:"cursor-pointer"},null,-1),W=e("img",{src:"../../public/assets/youtube-logo.svg",alt:"logo youtube",class:"cursor-pointer"},null,-1),X=e("img",{src:"../../public/assets/x-logo.svg",alt:"logo x twitter",class:"cursor-pointer"},null,-1),Y=e("img",{src:"../../public/assets/instagram-logo.svg",alt:"logo instagram",class:"cursor-pointer"},null,-1),Z=e("p",{class:"text-white text-sm xl:text-md"},"Copyrights 2024 MarcAu",-1);function ee(_,a,c,g,l,u){const t=p("ResponsiveNavLink");return r(),i("footer",q,[e("nav",G,[e("ul",D,[e("li",E,[o(t,{href:"/cgv"},{default:s(()=>[n("CGV")]),_:1})]),e("li",P,[o(t,{href:"/cgu"},{default:s(()=>[n("CGU")]),_:1})]),e("li",T,[o(t,{href:"/rgpd"},{default:s(()=>[n("Politique de confidentialité")]),_:1})]),e("li",U,[o(t,{href:"/legals"},{default:s(()=>[n("Mentions légales")]),_:1})]),e("li",J,[o(t,{href:"/contact"},{default:s(()=>[n("Contact")]),_:1})])])]),e("div",K,[o(t,{href:"/"},{default:s(()=>[Q]),_:1}),o(t,{href:"/"},{default:s(()=>[W]),_:1}),o(t,{href:"/"},{default:s(()=>[X]),_:1}),o(t,{href:"/"},{default:s(()=>[Y]),_:1})]),Z])}const re=m(H,[["render",ee]]);export{re as F,ne as H};