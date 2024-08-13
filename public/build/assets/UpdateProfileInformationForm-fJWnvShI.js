import{y as U,r as h,o as f,m as P,l as r,q as n,c as x,a as t,k as s,j as _,v as g,J as j,d as k,b as y,u as o,p as B,n as q,x as F}from"./app-iS2Av88Y.js";import{_ as T}from"./ActionMessage-D1VwqxaO.js";import{_ as z}from"./FormSection-D6O0ZwbB.js";import{a as p,_ as b}from"./TextInput-CtgEFs52.js";import{_ as v}from"./InputLabel-CNEWKI3R.js";import{_ as A}from"./PrimaryButton-DQxBh1mm.js";import{_ as S}from"./SecondaryButton-C1ZEBCUB.js";import"./SectionTitle-Dh1SsYZk.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const D={key:0,class:"col-span-6 sm:col-span-4"},L={class:"mt-2"},M=["src","alt"],R={class:"mt-2"},J={class:"col-span-6 sm:col-span-4"},O={class:"col-span-6 sm:col-span-4"},Y={class:"col-span-6 sm:col-span-4"},G={key:0},H={class:"text-sm mt-2"},K={class:"mt-2 font-medium text-sm text-green-600"},le={__name:"UpdateProfileInformationForm",props:{user:Object},setup(u){const d=u,e=U({_method:"PUT",firstname:d.user.firstname,lastname:d.user.lastname,email:d.user.email,photo:d.user.profile_photo_path}),V=h(null),c=h(null),i=h(null),C=()=>{i.value&&(e.photo=i.value.files[0]),e.post(route("user-profile-information.update"),{errorBag:"updateProfileInformation",preserveScroll:!0,onSuccess:()=>w()})},$=()=>{V.value=!0},I=()=>{i.value.click()},E=()=>{const a=i.value.files[0];if(!a)return;const l=new FileReader;l.onload=m=>{c.value=m.target.result},l.readAsDataURL(a)},N=()=>{F.delete(route("current-user-photo.destroy"),{preserveScroll:!0,onSuccess:()=>{c.value=null,w()}})},w=()=>{var a;(a=i.value)!=null&&a.value&&(i.value.value=null)};return(a,l)=>(f(),P(z,{onSubmitted:C},{title:r(()=>[n(" Informations du compte ")]),description:r(()=>[n(" Modifier les informations de votre compte. ")]),form:r(()=>[a.$page.props.jetstream.managesProfilePhotos?(f(),x("div",D,[t("input",{id:"photo",ref_key:"photoInput",ref:i,type:"file",class:"hidden",onChange:E},null,544),s(v,{for:"photo",value:"Photo"}),_(t("div",L,[t("img",{src:u.user.profile_photo_url,alt:u.user.name,class:"rounded-full h-20 w-20 object-cover"},null,8,M)],512),[[g,!c.value]]),_(t("div",R,[t("span",{class:"block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center",style:j("background-image: url('"+c.value+"');")},null,4)],512),[[g,c.value]]),s(S,{class:"mt-2 me-2",type:"button",onClick:k(I,["prevent"])},{default:r(()=>[n(" Choisir une nouvelle photo ")]),_:1}),u.user.profile_photo_path?(f(),P(S,{key:0,type:"button",class:"mt-2",onClick:k(N,["prevent"])},{default:r(()=>[n(" Effacer photo ")]),_:1})):y("",!0),s(p,{message:o(e).errors.photo,class:"mt-2"},null,8,["message"])])):y("",!0),t("div",J,[s(v,{for:"firstname",value:"Prénom"}),s(b,{id:"firstname",modelValue:o(e).firstname,"onUpdate:modelValue":l[0]||(l[0]=m=>o(e).firstname=m),type:"text",class:"mt-1 block w-full",required:"",autocomplete:"firstname"},null,8,["modelValue"]),s(p,{message:o(e).errors.name,class:"mt-2"},null,8,["message"])]),t("div",O,[s(v,{for:"lastname",value:"Nom"}),s(b,{id:"lastname",modelValue:o(e).lastname,"onUpdate:modelValue":l[1]||(l[1]=m=>o(e).lastname=m),type:"text",class:"mt-1 block w-full",required:"",autocomplete:"lastname"},null,8,["modelValue"]),s(p,{message:o(e).errors.name,class:"mt-2"},null,8,["message"])]),t("div",Y,[s(v,{for:"email",value:"Email"}),s(b,{id:"email",modelValue:o(e).email,"onUpdate:modelValue":l[2]||(l[2]=m=>o(e).email=m),type:"email",class:"mt-1 block w-full",required:"",autocomplete:"username"},null,8,["modelValue"]),s(p,{message:o(e).errors.email,class:"mt-2"},null,8,["message"]),a.$page.props.jetstream.hasEmailVerification&&u.user.email_verified_at===null?(f(),x("div",G,[t("p",H,[n(" Your email address is unverified. "),s(o(B),{href:a.route("verification.send"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500",onClick:k($,["prevent"])},{default:r(()=>[n(" Click here to re-send the verification email. ")]),_:1},8,["href"])]),_(t("div",K," A new verification link has been sent to your email address. ",512),[[g,V.value]])])):y("",!0)])]),actions:r(()=>[s(T,{on:o(e).recentlySuccessful,class:"me-3"},{default:r(()=>[n(" Enregistré. ")]),_:1},8,["on"]),s(A,{class:q({"opacity-25":o(e).processing}),disabled:o(e).processing},{default:r(()=>[n(" Sauvegarder ")]),_:1},8,["class","disabled"])]),_:1}))}};export{le as default};
