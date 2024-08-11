import{T as h,o as n,e as u,b as e,u as o,a as t,w as l,Z as b,t as v,f as c,i as x,j as f,g as d,c as y,n as k}from"./app-CtreDRx0.js";import{_ as V}from"./jo-2024-5zs2gHOR.js";import{_ as $,F as C}from"./Footer-BGeCkFn3.js";import{A as j}from"./AuthenticationCard-BbXj9hgn.js";import{_ as B}from"./AuthenticationCardLogo-C15klBMC.js";import{_ as q}from"./Checkbox-lmNQCRG5.js";import{_ as p,a as _}from"./TextInput-BOHE45GK.js";import{_ as g}from"./InputLabel-D07q9X6f.js";import{_ as N}from"./PrimaryButton-CnOn2Hlr.js";import"./ResponsiveNavLink-93DLAsYn.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const S={class:"h-screen w-full relative overflow-hidden"},F=t("img",{src:V,alt:"drapeau des jeux olympiques",class:"object-cover w-full h-full"},null,-1),R={class:"absolute h-full w-full top-0 flex justify-center items-center"},U={key:0,class:"mb-4 font-medium text-sm text-green-600"},A={class:"mt-4"},E={class:"block mt-4"},L={class:"flex items-center"},M=t("span",{class:"ms-2 text-sm text-gray-600"},"Se souvenir de moi",-1),P={class:"flex items-center justify-between mt-4"},T={class:"w-full"},X={__name:"Login",props:{canResetPassword:Boolean,status:String},setup(m){const s=h({email:"",password:"",remember:!1}),w=()=>{s.transform(i=>({...i,remember:s.remember?"on":""})).post(route("login"),{onFinish:()=>s.reset("password")})};return(i,a)=>(n(),u("div",null,[e(o(b),{title:"Log in"}),t("div",S,[e($),F]),t("div",R,[e(j,null,{logo:l(()=>[e(B)]),default:l(()=>[m.status?(n(),u("div",U,v(m.status),1)):c("",!0),t("form",{onSubmit:x(w,["prevent"])},[t("div",null,[e(g,{for:"email",value:"Email"}),e(p,{id:"email",modelValue:o(s).email,"onUpdate:modelValue":a[0]||(a[0]=r=>o(s).email=r),type:"email",class:"mt-1 block w-full",required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),e(_,{class:"mt-2",message:o(s).errors.email},null,8,["message"])]),t("div",A,[e(g,{for:"password",value:"Mot de passe"}),e(p,{id:"password",modelValue:o(s).password,"onUpdate:modelValue":a[1]||(a[1]=r=>o(s).password=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"current-password"},null,8,["modelValue"]),e(_,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),t("div",E,[t("label",L,[e(q,{checked:o(s).remember,"onUpdate:checked":a[2]||(a[2]=r=>o(s).remember=r),name:"remember"},null,8,["checked"]),M])]),t("div",P,[e(o(f),{href:i.route("register"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:l(()=>[d(" Créer un compte ")]),_:1},8,["href"]),m.canResetPassword?(n(),y(o(f),{key:0,href:i.route("password.request"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:l(()=>[d(" Réinitialiser mdp ")]),_:1},8,["href"])):c("",!0),e(N,{class:k(["ms-4",{"opacity-25":o(s).processing}]),disabled:o(s).processing},{default:l(()=>[d(" Connexion ")]),_:1},8,["class","disabled"])])],32)]),_:1})]),t("div",T,[e(C)])]))}};export{X as default};
