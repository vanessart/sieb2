function get_z_from_lms(d,b,a,c){var e;e=(Math.pow((d/a),b)-1)/(b*c);return e}function get_value_from_lms(e,b,a,c){var d;if(b!=0){d=a*Math.pow((1+b*c*e),(1/b))}else{d=a*Math.pow(Math.E,c*e)}return d}function get_auc_from_z(c){var e=new Array(0.5,0.50399,0.50798,0.51197,0.51595,0.51994,0.52392,0.5279,0.53188,0.53586,0.53983,0.5438,0.54776,0.55172,0.55567,0.55962,0.56356,0.56749,0.57142,0.57535,0.57926,0.58317,0.58706,0.59095,0.59483,0.59871,0.60257,0.60642,0.61026,0.61409,0.61791,0.62172,0.62552,0.6293,0.63307,0.63683,0.64058,0.64431,0.64803,0.65173,0.65542,0.6591,0.66276,0.6664,0.67003,0.67364,0.67724,0.68082,0.68439,0.68793,0.69146,0.69497,0.69847,0.70194,0.7054,0.70884,0.71226,0.71566,0.71904,0.7224,0.72575,0.72907,0.73237,0.73565,0.73891,0.74215,0.74537,0.74857,0.75175,0.7549,0.75804,0.76115,0.76424,0.7673,0.77035,0.77337,0.77637,0.77935,0.7823,0.78524,0.78814,0.79103,0.79389,0.79673,0.79955,0.80234,0.80511,0.80785,0.81057,0.81327,0.81594,0.81859,0.82121,0.82381,0.82639,0.82894,0.83147,0.83398,0.83646,0.83891,0.84134,0.84375,0.84614,0.84849,0.85083,0.85314,0.85543,0.85769,0.85993,0.86214,0.86433,0.8665,0.86864,0.87076,0.87286,0.87493,0.87698,0.879,0.881,0.88298,0.88493,0.88686,0.88877,0.89065,0.89251,0.89435,0.89617,0.89796,0.89973,0.90147,0.9032,0.9049,0.90658,0.90824,0.90988,0.91149,0.91309,0.91466,0.91621,0.91774,0.91924,0.92073,0.9222,0.92364,0.92507,0.92647,0.92785,0.92922,0.93056,0.93189,0.93319,0.93448,0.93574,0.93699,0.93822,0.93943,0.94062,0.94179,0.94295,0.94408,0.9452,0.9463,0.94738,0.94845,0.9495,0.95053,0.95154,0.95254,0.95352,0.95449,0.95543,0.95637,0.95728,0.95818,0.95907,0.95994,0.9608,0.96164,0.96246,0.96327,0.96407,0.96485,0.96562,0.96638,0.96712,0.96784,0.96856,0.96926,0.96995,0.97062,0.97128,0.97193,0.97257,0.9732,0.97381,0.97441,0.975,0.97558,0.97615,0.9767,0.97725,0.97778,0.97831,0.97882,0.97932,0.97982,0.9803,0.98077,0.98124,0.98169,0.98214,0.98257,0.983,0.98341,0.98382,0.98422,0.98461,0.985,0.98537,0.98574,0.9861,0.98645,0.98679,0.98713,0.98745,0.98778,0.98809,0.9884,0.9887,0.98899,0.98928,0.98956,0.98983,0.9901,0.99036,0.99061,0.99086,0.99111,0.99134,0.99158,0.9918,0.99202,0.99224,0.99245,0.99266,0.99286,0.99305,0.99324,0.99343,0.99361,0.99379,0.99396,0.99413,0.9943,0.99446,0.99461,0.99477,0.99492,0.99506,0.9952,0.99534,0.99547,0.9956,0.99573,0.99585,0.99598,0.99609,0.99621,0.99632,0.99643,0.99653,0.99664,0.99674,0.99683,0.99693,0.99702,0.99711,0.9972,0.99728,0.99736,0.99744,0.99752,0.9976,0.99767,0.99774,0.99781,0.99788,0.99795,0.99801,0.99807,0.99813,0.99819,0.99825,0.99831,0.99836,0.99841,0.99846,0.99851,0.99856,0.99861,0.99865,0.99869,0.99874,0.99878,0.99882,0.99886,0.99889,0.99893,0.99896,0.999,0.99903,0.99906,0.9991,0.99913,0.99916,0.99918,0.99921,0.99924,0.99926,0.99929,0.99931,0.99934,0.99936,0.99938,0.9994,0.99942,0.99944,0.99946,0.99948,0.9995,0.99952,0.99953,0.99955,0.99957,0.99958,0.9996,0.99961,0.99962,0.99964,0.99965,0.99966,0.99968,0.99969,0.9997,0.99971,0.99972,0.99973,0.99974,0.99975,0.99976,0.99977,0.99978,0.99978,0.99979,0.9998,0.99981,0.99981,0.99982,0.99983,0.99983,0.99984,0.99985,0.99985,0.99986,0.99986,0.99987,0.99987,0.99988,0.99988,0.99989,0.99989,0.9999,0.9999,0.9999,0.99991,0.99991,0.99992,0.99992,0.99992,0.99992,0.99993,0.99993,0.99993,0.99994,0.99994,0.99994,0.99994,0.99995,0.99995,0.99995,0.99995,0.99995,0.99996,0.99996,0.99996,0.99996,0.99996,0.99996,0.99997,0.99997,0.99997,0.99997,0.99997,0.99997,0.99997,0.99997,0.99998,0.99998,0.99998,0.99998);var d=Math.abs(c.toFixed(2));if(d>4.09){d=4.09}var b=(d*100).toFixed(0);var a=e[b];if(c<0){return(1-a)}else{return a}}function get_z_from_auc(d){var b=new Array(0.5,0.50399,0.50798,0.51197,0.51595,0.51994,0.52392,0.5279,0.53188,0.53586,0.53983,0.5438,0.54776,0.55172,0.55567,0.55962,0.56356,0.56749,0.57142,0.57535,0.57926,0.58317,0.58706,0.59095,0.59483,0.59871,0.60257,0.60642,0.61026,0.61409,0.61791,0.62172,0.62552,0.6293,0.63307,0.63683,0.64058,0.64431,0.64803,0.65173,0.65542,0.6591,0.66276,0.6664,0.67003,0.67364,0.67724,0.68082,0.68439,0.68793,0.69146,0.69497,0.69847,0.70194,0.7054,0.70884,0.71226,0.71566,0.71904,0.7224,0.72575,0.72907,0.73237,0.73565,0.73891,0.74215,0.74537,0.74857,0.75175,0.7549,0.75804,0.76115,0.76424,0.7673,0.77035,0.77337,0.77637,0.77935,0.7823,0.78524,0.78814,0.79103,0.79389,0.79673,0.79955,0.80234,0.80511,0.80785,0.81057,0.81327,0.81594,0.81859,0.82121,0.82381,0.82639,0.82894,0.83147,0.83398,0.83646,0.83891,0.84134,0.84375,0.84614,0.84849,0.85083,0.85314,0.85543,0.85769,0.85993,0.86214,0.86433,0.8665,0.86864,0.87076,0.87286,0.87493,0.87698,0.879,0.881,0.88298,0.88493,0.88686,0.88877,0.89065,0.89251,0.89435,0.89617,0.89796,0.89973,0.90147,0.9032,0.9049,0.90658,0.90824,0.90988,0.91149,0.91309,0.91466,0.91621,0.91774,0.91924,0.92073,0.9222,0.92364,0.92507,0.92647,0.92785,0.92922,0.93056,0.93189,0.93319,0.93448,0.93574,0.93699,0.93822,0.93943,0.94062,0.94179,0.94295,0.94408,0.9452,0.9463,0.94738,0.94845,0.9495,0.95053,0.95154,0.95254,0.95352,0.95449,0.95543,0.95637,0.95728,0.95818,0.95907,0.95994,0.9608,0.96164,0.96246,0.96327,0.96407,0.96485,0.96562,0.96638,0.96712,0.96784,0.96856,0.96926,0.96995,0.97062,0.97128,0.97193,0.97257,0.9732,0.97381,0.97441,0.975,0.97558,0.97615,0.9767,0.97725,0.97778,0.97831,0.97882,0.97932,0.97982,0.9803,0.98077,0.98124,0.98169,0.98214,0.98257,0.983,0.98341,0.98382,0.98422,0.98461,0.985,0.98537,0.98574,0.9861,0.98645,0.98679,0.98713,0.98745,0.98778,0.98809,0.9884,0.9887,0.98899,0.98928,0.98956,0.98983,0.9901,0.99036,0.99061,0.99086,0.99111,0.99134,0.99158,0.9918,0.99202,0.99224,0.99245,0.99266,0.99286,0.99305,0.99324,0.99343,0.99361,0.99379,0.99396,0.99413,0.9943,0.99446,0.99461,0.99477,0.99492,0.99506,0.9952,0.99534,0.99547,0.9956,0.99573,0.99585,0.99598,0.99609,0.99621,0.99632,0.99643,0.99653,0.99664,0.99674,0.99683,0.99693,0.99702,0.99711,0.9972,0.99728,0.99736,0.99744,0.99752,0.9976,0.99767,0.99774,0.99781,0.99788,0.99795,0.99801,0.99807,0.99813,0.99819,0.99825,0.99831,0.99836,0.99841,0.99846,0.99851,0.99856,0.99861,0.99865,0.99869,0.99874,0.99878,0.99882,0.99886,0.99889,0.99893,0.99896,0.999,0.99903,0.99906,0.9991,0.99913,0.99916,0.99918,0.99921,0.99924,0.99926,0.99929,0.99931,0.99934,0.99936,0.99938,0.9994,0.99942,0.99944,0.99946,0.99948,0.9995,0.99952,0.99953,0.99955,0.99957,0.99958,0.9996,0.99961,0.99962,0.99964,0.99965,0.99966,0.99968,0.99969,0.9997,0.99971,0.99972,0.99973,0.99974,0.99975,0.99976,0.99977,0.99978,0.99978,0.99979,0.9998,0.99981,0.99981,0.99982,0.99983,0.99983,0.99984,0.99985,0.99985,0.99986,0.99986,0.99987,0.99987,0.99988,0.99988,0.99989,0.99989,0.9999,0.9999,0.9999,0.99991,0.99991,0.99992,0.99992,0.99992,0.99992,0.99993,0.99993,0.99993,0.99994,0.99994,0.99994,0.99994,0.99995,0.99995,0.99995,0.99995,0.99995,0.99996,0.99996,0.99996,0.99996,0.99996,0.99996,0.99997,0.99997,0.99997,0.99997,0.99997,0.99997,0.99997,0.99997,0.99998,0.99998,0.99998,0.99998);var c=0.5+Math.abs(d-0.5);for(i=0,a=409;i<409;i++){if(Math.abs(c-b[i])<Math.abs(c-b[i+1])){var a=i/100;break}else{a=i/100}}if(d<0.5){return(-1*a)}else{return(a)}}function findLowerAge(b,c){var a;ageArrayLength=c.length;if((b<c[0])||(b>c[ageArrayLength-1])){return -100}for(a=0;a<ageArrayLength;a++){if(c[a]==b){return a}else{if(c[a]>b){return a-1}}}}function getLMSValuesInterpolated(p,b,f,e,q,a,c){var o,j,g,r,d,k,h;var n=new Array();h=f.length;if((b<f[0])||(b>f[h-1])){return -100}for(d=0;d<h;d++){if(f[d]==b){j=0;o=0;k=d;break}else{if(f[d]>b){k=d;d--;j=(b-f[d])/(f[k]-f[d]);o=1;break}}}for(g=0;g<2;g++){l=e[d+(g*o)];m=q[d+(g*o)];s=a[d+(g*o)];if(c){n[g]=get_value_from_lms(p,l,m,s)}else{n[g]=get_z_from_lms(p,l,m,s)}}r=n[0]+(j*(n[1]-n[0]));return r}function getMeanStabwValuesInterpolated(k,n,j,g,c,b){var h,e,d,p,o,a,j;var f=new Array();ageGridLength=j.length;if((n<j[0])||(n>j[ageGridLength-1])){return -100}for(o=0;o<ageGridLength;o++){if(j[o]==n){e=0;h=0;a=o;break}else{if(j[o]>n){a=o;o--;e=(n-j[o])/(j[a]-j[o]);h=1;break}}}for(d=0;d<2;d++){mean=g[o+(d*h)];stabw=c[o+(d*h)];if(b){f[d]=get_value_from_meanstabw(k,mean,stabw)}else{f[d]=get_z_from_meanstabw(k,mean,stabw)}}p=f[0]+(e*(f[1]-f[0]));return p}function get_value_from_meanstabw(d,a,c){var b;b=(c*d)+a;return b}function get_z_from_meanstabw(b,a,c){var d;d=(b-a)/c;return d};