{"version":3,"sources":["menuform.bundle.js"],"names":["this","BX","Landing","UI","exports","main_core","landing_loc","landing_env","landing_main","landing_ui_form_baseform","landing_ui_form_menuitemform","ui_draganddrop_draggable","_templateObject2","data","babelHelpers","taggedTemplateLiteral","_templateObject","MenuForm","_BaseForm","inherits","_this","options","arguments","length","undefined","classCallCheck","possibleConstructorReturn","getPrototypeOf","call","Dom","addClass","layout","forms","Collection","FormCollection","Type","isArray","forEach","form","addForm","draggable","Draggable","container","getBody","dragElement","type","DROP_PREVIEW","depth","margin","onMenuItemRemove","bind","assertThisInitialized","append","getAddItemLayout","createClass","key","value","contains","add","body","subscribe","invalidateCache","event","children","getChildren","element","remove","serialize","_this2","draggableElements","getDraggableElements","parent","parentDepth","getElementDepth","allChildren","reduce","acc","current","currentDepth","getByLayout","push","objectSpread","onAddButtonClick","preventDefault","field","Field","Link","content","text","Loc","getMessage","href","target","siteId","Env","getInstance","getSiteId","landingId","Main","id","filter","=TYPE","getType","MenuItemForm","fields","showForm","setTimeout","input","enableEdit","_input$childNodes","slicedToArray","childNodes","textNode","range","document","createRange","sel","window","getSelection","setStart","innerText","collapse","removeAllRanges","addRange","getAddButton","_this3","cache","remember","Tag","render","_this4","BaseForm","Form","DragAndDrop"],"mappings":"AAAAA,KAAKC,GAAKD,KAAKC,OACfD,KAAKC,GAAGC,QAAUF,KAAKC,GAAGC,YAC1BF,KAAKC,GAAGC,QAAQC,GAAKH,KAAKC,GAAGC,QAAQC,QACpC,SAAUC,EAAQC,EAAUC,EAAYC,EAAYC,EAAaC,EAAyBC,EAA6BC,GACvH,aAEA,SAASC,IACP,IAAIC,EAAOC,aAAaC,uBAAuB,+DAAkE,6BAEjHH,EAAmB,SAASA,IAC1B,OAAOC,GAGT,OAAOA,EAGT,SAASG,IACP,IAAIH,EAAOC,aAAaC,uBAAuB,+JAAmK,6BAA+B,gCAEjPC,EAAkB,SAASA,IACzB,OAAOH,GAGT,OAAOA,EAET,IAAII,EAEJ,SAAUC,GACRJ,aAAaK,SAASF,EAAUC,GAEhC,SAASD,IACP,IAAIG,EAEJ,IAAIC,EAAUC,UAAUC,OAAS,GAAKD,UAAU,KAAOE,UAAYF,UAAU,MAC7ER,aAAaW,eAAezB,KAAMiB,GAClCG,EAAQN,aAAaY,0BAA0B1B,KAAMc,aAAaa,eAAeV,GAAUW,KAAK5B,KAAMqB,IACtGhB,EAAUwB,IAAIC,SAASV,EAAMW,OAAQ,wBACrCX,EAAMY,MAAQ,IAAI/B,GAAGC,QAAQC,GAAG8B,WAAWC,eAE3C,GAAI7B,EAAU8B,KAAKC,QAAQf,EAAQW,OAAQ,CACzCX,EAAQW,MAAMK,QAAQ,SAAUC,GAC9BlB,EAAMmB,QAAQD,KAIlBlB,EAAMoB,UAAY,IAAI7B,EAAyB8B,WAC7CC,UAAWtB,EAAMuB,UACjBH,UAAW,4BACXI,YAAa,sCACbC,KAAMlC,EAAyB8B,UAAUK,aACzCC,OACEC,OAAQ,MAGZ5B,EAAM6B,iBAAmB7B,EAAM6B,iBAAiBC,KAAKpC,aAAaqC,sBAAsB/B,IACxFf,EAAUwB,IAAIuB,OAAOhC,EAAMiC,mBAAoBjC,EAAMW,QACrD,OAAOX,EAGTN,aAAawC,YAAYrC,IACvBsC,IAAK,UACLC,MAAO,SAASjB,EAAQD,GACtB,IAAKtC,KAAKgC,MAAMyB,SAASnB,GAAO,CAC9BtC,KAAKgC,MAAM0B,IAAIpB,GACfjC,EAAUwB,IAAIuB,OAAOd,EAAKP,OAAQ/B,KAAK2D,MACvCrB,EAAKsB,UAAU,SAAU5D,KAAKiD,iBAAiBC,KAAKlD,OAEpD,GAAIA,KAAKwC,UAAW,CAClBxC,KAAKwC,UAAUqB,uBAKrBN,IAAK,mBACLC,MAAO,SAASP,EAAiBa,GAC/B,IAAIC,EAAW/D,KAAKwC,UAAUwB,YAAYF,EAAMjD,KAAKyB,KAAKP,QAC1DgC,EAAS1B,QAAQ,SAAU4B,GACzB5D,EAAUwB,IAAIqC,OAAOD,KAEvBjE,KAAKgC,MAAMkC,OAAOJ,EAAMjD,KAAKyB,MAC7BtC,KAAKwC,UAAUqB,qBAGjBN,IAAK,YACLC,MAAO,SAASW,IACd,IAAIC,EAASpE,KAEb,IAAIqE,EAAoBrE,KAAKwC,UAAU8B,uBAEvC,IAAIN,EAAc,SAASA,EAAYO,GACrC,IAAIC,EAAcJ,EAAO5B,UAAUiC,gBAAgBF,GAEnD,IAAIG,EAAcN,EAAO5B,UAAUwB,YAAYO,GAE/C,OAAOG,EAAYC,OAAO,SAAUC,EAAKC,GACvC,IAAIC,EAAeV,EAAO5B,UAAUiC,gBAAgBI,GAEpD,GAAIC,IAAiBN,EAAc,EAAG,CACpC,IAAIlC,EAAO8B,EAAOpC,MAAM+C,YAAYF,GAEpCD,EAAII,KAAKlE,aAAamE,gBAAiB3C,EAAK6B,aAC1CJ,SAAUC,EAAYa,MAI1B,OAAOD,QAIX,OAAOP,EAAkBM,OAAO,SAAUC,EAAKX,GAC7C,GAAIG,EAAO5B,UAAUiC,gBAAgBR,KAAa,EAAG,CACnD,IAAI3B,EAAO8B,EAAOpC,MAAM+C,YAAYd,GAEpCW,EAAII,KAAKlE,aAAamE,gBAAiB3C,EAAK6B,aAC1CJ,SAAUC,EAAYC,MAI1B,OAAOW,UAIXrB,IAAK,mBACLC,MAAO,SAAS0B,EAAiBpB,GAC/BA,EAAMqB,iBACN,IAAIC,EAAQ,IAAInF,GAAGC,QAAQC,GAAGkF,MAAMC,MAClCC,SACEC,KAAMlF,EAAYmF,IAAIC,WAAW,0BACjCC,KAAM,YACNC,OAAQ,UAEVvE,SACEwE,OAAQtF,EAAYuF,IAAIC,cAAcC,YACtCC,UAAWzF,EAAa0F,KAAKH,cAAcI,GAC3CC,QACEC,QAAS9F,EAAYuF,IAAIC,cAAcO,cAI7C,IAAIhE,EAAO,IAAI5B,EAA6B6F,cAC1CC,QAASpB,KAEX9C,EAAKmE,WACLzG,KAAKuC,QAAQD,GACboE,WAAW,WACTtB,EAAMuB,MAAMC,aACZ,IAAID,EAAQvB,EAAMuB,MAAMA,MAExB,IAAIE,EAAoB/F,aAAagG,cAAcH,EAAMI,WAAY,GACjEC,EAAWH,EAAkB,GAEjC,GAAIG,EAAU,CACZ,IAAIC,EAAQC,SAASC,cACrB,IAAIC,EAAMC,OAAOC,eACjBL,EAAMM,SAASP,EAAUL,EAAMa,UAAUjG,QACzC0F,EAAMQ,SAAS,MACfL,EAAIM,kBACJN,EAAIO,SAASV,SAKnB1D,IAAK,eACLC,MAAO,SAASoE,IACd,IAAIC,EAAS7H,KAEb,OAAOA,KAAK8H,MAAMC,SAAS,YAAa,WACtC,OAAO1H,EAAU2H,IAAIC,OAAOjH,IAAmB6G,EAAO3C,iBAAiBhC,KAAK2E,GAASvH,EAAYmF,IAAIC,WAAW,+BAIpHnC,IAAK,mBACLC,MAAO,SAASH,IACd,IAAI6E,EAASlI,KAEb,OAAOA,KAAK8H,MAAMC,SAAS,gBAAiB,WAC1C,OAAO1H,EAAU2H,IAAIC,OAAOrH,IAAoBsH,EAAON,sBAI7D,OAAO3G,EAzJT,CA0JER,EAAyB0H,UAE3B/H,EAAQa,SAAWA,GApLpB,CAsLGjB,KAAKC,GAAGC,QAAQC,GAAGiI,KAAOpI,KAAKC,GAAGC,QAAQC,GAAGiI,SAAYnI,GAAGA,GAAGC,QAAQD,GAAGC,QAAQD,GAAGC,QAAQD,GAAGC,QAAQC,GAAGiI,KAAKnI,GAAGC,QAAQC,GAAGiI,KAAKnI,GAAGE,GAAGkI","file":"menuform.bundle.map.js"}