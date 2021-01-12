const siteTitle = document.querySelector('.site-title').innerText
const textTitle = siteTitle.split(' ')

document.querySelector('.site-title').innerHTML = `<span class="top-head">${textTitle[0]}</span><span class="bottom-head">${textTitle[1]}</span>`

const reply = document.querySelectorAll('.reply')
const commentAuthor = document.querySelectorAll('.comment-author')

commentAuthor.forEach((item, i) => {
    item.appendChild(reply[i])
})