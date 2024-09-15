import{y as h,o as m,c,k as e,u as o,a as t,l,Z as b,t as v,b as u,d as x,p as f,q as d,m as y,n as k}from"./app-sxmKPskq.js";import{H as V,F as j}from"./Footer-B_50z3Ql.js";import{A as C}from"./AuthenticationCard-DVb2eJt9.js";import{_ as $}from"./AuthenticationCardLogo-DiqwZ0iy.js";import{_ as q}from"./Checkbox-pWlPs2Na.js";import{_ as p,a as _}from"./TextInput-KN9s6N7s.js";import{_ as g}from"./InputLabel-oyoxykoF.js";import{_ as B}from"./PrimaryButton-Bxe-NLRF.js";import"./ResponsiveNavLink-Bqu6smUF.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const N={class:"w-full flex flex-col items-center overflow-hidden"},S={class:"h-screen w-full relative overflow-hidden"},F=t("img",{src:"../../../public/assets/jo-2024.jpeg",alt:"drapeau des jeux olympiques",class:"object-cover w-full h-full"},null,-1),R={class:"absolute h-full w-4/5 top-0 flex justify-center items-center"},U={key:0,class:"mb-4 font-medium text-sm text-green-600"},A={class:"mt-4"},E={class:"block mt-4"},H={class:"flex items-center"},L=t("span",{class:"ms-2 text-sm text-gray-600"},"Se souvenir de moi",-1),M={class:"flex items-center justify-between mt-4"},P={class:"w-full"},W={__name:"Login",props:{canResetPassword:Boolean,status:String},setup(n){const s=h({email:"",password:"",remember:!1}),w=()=>{s.transform(i=>({...i,remember:s.remember?"on":""})).post(route("login"),{onFinish:()=>s.reset("password")})};return(i,a)=>(m(),c("div",N,[e(o(b),{title:"Log in"}),t("div",S,[e(V),F]),t("div",R,[e(C,null,{logo:l(()=>[e($)]),default:l(()=>[n.status?(m(),c("div",U,v(n.status),1)):u("",!0),t("form",{onSubmit:x(w,["prevent"])},[t("div",null,[e(g,{for:"email",value:"Email"}),e(p,{id:"email",modelValue:o(s).email,"onUpdate:modelValue":a[0]||(a[0]=r=>o(s).email=r),name:"email",type:"email",class:"mt-1 block w-full",required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),e(_,{class:"mt-2",message:o(s).errors.email},null,8,["message"])]),t("div",A,[e(g,{for:"password",value:"Mot de passe"}),e(p,{id:"password",modelValue:o(s).password,"onUpdate:modelValue":a[1]||(a[1]=r=>o(s).password=r),name:"password",type:"password",class:"mt-1 block w-full",required:"",autocomplete:"current-password"},null,8,["modelValue"]),e(_,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),t("div",E,[t("label",H,[e(q,{checked:o(s).remember,"onUpdate:checked":a[2]||(a[2]=r=>o(s).remember=r),name:"remember"},null,8,["checked"]),L])]),t("div",M,[e(o(f),{href:i.route("register"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:l(()=>[d(" Créer un compte ")]),_:1},8,["href"]),n.canResetPassword?(m(),y(o(f),{key:0,href:i.route("password.request"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:l(()=>[d(" Réinitialiser mdp ")]),_:1},8,["href"])):u("",!0),e(B,{name:"login",class:k(["ms-4",{"opacity-25":o(s).processing}]),disabled:o(s).processing},{default:l(()=>[d(" Connexion ")]),_:1},8,["class","disabled"])])],32)]),_:1})]),t("div",P,[e(j)])]))}};export{W as default};
