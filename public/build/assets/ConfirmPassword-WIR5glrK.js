import{y as m,r as c,o as d,c as u,k as a,u as e,l as r,F as p,Z as f,a as o,n as _,q as w,d as g}from"./app-vCdMRrgH.js";import{A as b}from"./AuthenticationCard-SfERD1Kx.js";import{_ as h}from"./AuthenticationCardLogo-DeYZLX6T.js";import{_ as x,a as y}from"./TextInput-CiO-_YUM.js";import{_ as v}from"./InputLabel-B_9snkyq.js";import{_ as V}from"./PrimaryButton-D3zcyjb6.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const k=o("div",{class:"mb-4 text-sm text-gray-600"}," This is a secure area of the application. Please confirm your password before continuing. ",-1),C={class:"flex justify-end mt-4"},S={__name:"ConfirmPassword",setup($){const s=m({password:""}),t=c(null),n=()=>{s.post(route("password.confirm"),{onFinish:()=>{s.reset(),t.value.focus()}})};return(A,i)=>(d(),u(p,null,[a(e(f),{title:"Secure Area"}),a(b,null,{logo:r(()=>[a(h)]),default:r(()=>[k,o("form",{onSubmit:g(n,["prevent"])},[o("div",null,[a(v,{for:"password",value:"Password"}),a(x,{id:"password",ref_key:"passwordInput",ref:t,modelValue:e(s).password,"onUpdate:modelValue":i[0]||(i[0]=l=>e(s).password=l),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),a(y,{class:"mt-2",message:e(s).errors.password},null,8,["message"])]),o("div",C,[a(V,{class:_(["ms-4",{"opacity-25":e(s).processing}]),disabled:e(s).processing},{default:r(()=>[w(" Confirm ")]),_:1},8,["class","disabled"])])],32)]),_:1})],64))}};export{S as default};