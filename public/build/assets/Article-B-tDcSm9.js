import{H as i,F as r}from"./Footer-B_50z3Ql.js";import{Z as m,z as o,o as _,c as d,k as s,a as e,t as p,F as f}from"./app-sxmKPskq.js";import{_ as h}from"./ResponsiveNavLink-Bqu6smUF.js";import{g as u}from"./utilities-C5P9uAkL.js";import{_ as g}from"./_plugin-vue_export-helper-DlAUqK2U.js";const x={name:"Article",components:{Header:i,Footer:r,Head:m,ResponsiveNavLink:h},props:{article:{type:Object,default:{}}},methods:{getImgPath:u}},H={class:"flex justify-center w-full overflow-hidden"},w={class:"flex flex-col items-center gap-5"},v={class:"font-semibold text-xl mt-6"},y={class:"w-full md:w-2/4 p-6"},F=["src"],b=["innerHTML"],k=e("p",{class:"italic pb-6 text-sm"},"Contenu généré par chat-gpt",-1);function A(B,L,t,N,j,a){const c=o("Head"),n=o("Header"),l=o("Footer");return _(),d(f,null,[s(c,{title:"Article"}),s(n,{opacity:"bg-opacity-100",position:"initial"}),e("main",H,[e("article",w,[e("h1",v,p(t.article.title),1),e("div",y,[e("img",{src:a.getImgPath(t.article.photo),alt:"",class:"w-full rounded-xl"},null,8,F)]),e("div",{innerHTML:t.article.body,class:"flex flex-col w-full md:w-2/4 items-center p-6"},null,8,b),k])]),s(l)],64)}const V=g(x,[["render",A]]);export{V as default};
