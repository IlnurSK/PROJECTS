// console.log("Hello World");
// console.log(8/2+5 - -3 / 2);
// let who = "dragon's" + 'mother';
// console.log(who);
// const name1 = 'Robb';
// console.log(name1[name1.length]);
// console.log('' || 'aaaa');
/* eslint-disable no-plusplus */

// BEGIN (write your solution here)
const makeItFunny = (str, nElement) => {
    let i = 0;
    let result = '';
    while (i < str.lenght) {
        if (i === nElement) {
            result = `${result}${str[i].toUpperCase}`;
        } else {
            result = `${result}${str[i]}`;
        }
      i = i + 1;
    };
    return result;
};
// END

const text = 'I never look back';
let test = makeItFunny(text, 3);
console.log(test);
console.log("Hello World");
