import{y as c,o as f,c as w,k as e,u as o,l,F as _,Z as g,a as t,n as V,q as k,d as v}from"./app-iS2Av88Y.js";import{A as b}from"./AuthenticationCard-46VJCKaD.js";import{_ as y}from"./AuthenticationCardLogo-CQ9NboQv.js";import{_ as m,a as i}from"./TextInput-CtgEFs52.js";import{_ as n}from"./InputLabel-CNEWKI3R.js";import{_ as x}from"./PrimaryButton-DQxBh1mm.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const P={class:"mt-4"},$={class:"mt-4"},q={class:"flex items-center justify-end mt-4"},A={__name:"ResetPassword",props:{email:String,token:String},setup(p){const d=p,s=c({token:d.token,email:d.email,password:"",password_confirmation:""}),u=()=>{s.post(route("password.update"),{onFinish:()=>s.reset("password","password_confirmation")})};return(C,a)=>(f(),w(_,null,[e(o(g),{title:"Reset Password"}),e(b,null,{logo:l(()=>[e(y)]),default:l(()=>[t("form",{onSubmit:v(u,["prevent"])},[t("div",null,[e(n,{for:"email",value:"Email"}),e(m,{id:"email",modelValue:o(s).email,"onUpdate:modelValue":a[0]||(a[0]=r=>o(s).email=r),type:"email",class:"mt-1 block w-full",required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),e(i,{class:"mt-2",message:o(s).errors.email},null,8,["message"])]),t("div",P,[e(n,{for:"password",value:"Password"}),e(m,{id:"password",modelValue:o(s).password,"onUpdate:modelValue":a[1]||(a[1]=r=>o(s).password=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(i,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),t("div",$,[e(n,{for:"password_confirmation",value:"Confirm Password"}),e(m,{id:"password_confirmation",modelValue:o(s).password_confirmation,"onUpdate:modelValue":a[2]||(a[2]=r=>o(s).password_confirmation=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(i,{class:"mt-2",message:o(s).errors.password_confirmation},null,8,["message"])]),t("div",q,[e(x,{class:V({"opacity-25":o(s).processing}),disabled:o(s).processing},{default:l(()=>[k(" Reset Password ")]),_:1},8,["class","disabled"])])],32)]),_:1})],64))}};export{A as default};
