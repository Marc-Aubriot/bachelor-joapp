import{r as i,y as f,o as w,m as v,l as a,q as l,a as n,k as r,u as o,n as V}from"./app-CjOUruHE.js";import{_ as g}from"./ActionMessage-Cr45yltA.js";import{_ as k}from"./FormSection-C5I7OuQd.js";import{_ as d,a as p}from"./TextInput-Bnx2xc9X.js";import{_ as u}from"./InputLabel-BVofgSHz.js";import{_ as y}from"./PrimaryButton-DtvbV7I4.js";import"./SectionTitle-CC6oNj6P.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const b={class:"col-span-6 sm:col-span-4"},$={class:"col-span-6 sm:col-span-4"},x={class:"col-span-6 sm:col-span-4"},T={__name:"UpdatePasswordForm",setup(P){const c=i(null),m=i(null),s=f({current_password:"",password:"",password_confirmation:""}),_=()=>{s.put(route("user-password.update"),{errorBag:"updatePassword",preserveScroll:!0,onSuccess:()=>s.reset(),onError:()=>{s.errors.password&&(s.reset("password","password_confirmation"),c.value.focus()),s.errors.current_password&&(s.reset("current_password"),m.value.focus())}})};return(S,e)=>(w(),v(k,{onSubmitted:_},{title:a(()=>[l(" Modifier mot de passe ")]),description:a(()=>[l(" Utilisez un mot de passe sécurisé pour une sécurité maximale. ")]),form:a(()=>[n("div",b,[r(u,{for:"current_password",value:"Mot de passe actuel"}),r(d,{id:"current_password",ref_key:"currentPasswordInput",ref:m,modelValue:o(s).current_password,"onUpdate:modelValue":e[0]||(e[0]=t=>o(s).current_password=t),type:"password",class:"mt-1 block w-full",autocomplete:"current-password"},null,8,["modelValue"]),r(p,{message:o(s).errors.current_password,class:"mt-2"},null,8,["message"])]),n("div",$,[r(u,{for:"password",value:"Nouveau mot de passe"}),r(d,{id:"password",ref_key:"passwordInput",ref:c,modelValue:o(s).password,"onUpdate:modelValue":e[1]||(e[1]=t=>o(s).password=t),type:"password",class:"mt-1 block w-full",autocomplete:"new-password"},null,8,["modelValue"]),r(p,{message:o(s).errors.password,class:"mt-2"},null,8,["message"])]),n("div",x,[r(u,{for:"password_confirmation",value:"Confirmer nouveau mot de passe"}),r(d,{id:"password_confirmation",modelValue:o(s).password_confirmation,"onUpdate:modelValue":e[2]||(e[2]=t=>o(s).password_confirmation=t),type:"password",class:"mt-1 block w-full",autocomplete:"new-password"},null,8,["modelValue"]),r(p,{message:o(s).errors.password_confirmation,class:"mt-2"},null,8,["message"])])]),actions:a(()=>[r(g,{on:o(s).recentlySuccessful,class:"me-3"},{default:a(()=>[l(" Enregistré. ")]),_:1},8,["on"]),r(y,{class:V({"opacity-25":o(s).processing}),disabled:o(s).processing},{default:a(()=>[l(" Sauvegarder ")]),_:1},8,["class","disabled"])]),_:1}))}};export{T as default};