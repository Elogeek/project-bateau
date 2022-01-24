import "./node_modules/lodash/lodash.js";

let array = [1,2,3,4,5,6,7,8,9];

const shuffled = _.shuffle(array);
const result = document.createElement("div");
result.innerHTML = shuffled.toString();
document.body.append(result);