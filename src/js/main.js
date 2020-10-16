$(document).ready(function () {
  for (let i = 0; i < localStorage.length; i++) {
    let key = localStorage.key(i)
    let taskValue = localStorage.getItem(key.toString())

    let taskItem = '<li class="task-item" data-index="' + key + '"><div class="task-text">' + taskValue + '</div>' +
      '<button class="delete-task-button">Delete</button><button class="edit-task-button">Edit</button></li>'

    taskList.append(taskItem)
  }
})

let emptyFieldError = 'The field cannot be empty! Please, enter a valid task!'
let taskInput = $('.task-input')
let taskList = $('.task-list')

$('.add-task-button').on('click', function (event) {
  event.preventDefault()
  let taskValue = taskInput.val()
  let index = $('.task-item').length

  if (!taskValue) {
    alert(emptyFieldError)
    return false
  }

  let taskItem = '<li class="task-item" data-index="' + index + '"><div class="task-text">' + taskValue + '</div>' +
    '<button class="delete-task-button">Delete</button><button class="edit-task-button">Edit</button></li>'

  taskList.append(taskItem)
  taskInput.val('')

  localStorage.setItem(index, taskValue)
})

taskList.on('click', '.delete-task-button', function () {
  let taskItem = $(this).parents('.task-item')
  let key = taskItem.attr('data-index')

  localStorage.removeItem(key)
  taskItem.remove()
})

taskList.on('click', '.edit-task-button', function () {
  let currentTask = $(this).siblings('.task-text').text()

  $(this).siblings('.task-text').html('<form action="#" method="post" class="edit-form" name="edit-form" id="edit-form">' +
    '<input type="checkbox" name="task-complete" value="done" class="task-complete">' +
    '<input type="text" value="' + currentTask + '" class="update-task-input">' +
    '<button class="update-task-button">Update</button></form>')
})

taskList.on('click', '.update-task-button', function () {
  let updatedTaskValue = $(this).siblings('.update-task-input').val()
  let taskItem = $(this).parents('.task-item')
  let key = taskItem.attr('data-index')

  if (!updatedTaskValue) {
    alert(emptyFieldError)
    return false
  }

  localStorage.setItem(key, updatedTaskValue)
  $(this).parents('.task-text').text(updatedTaskValue)
})

taskList.on('change', '.task-complete', function () {
  let taskValue = $(this).siblings('.update-task-input').val()

  if (!taskValue) {
    alert(emptyFieldError)
    return false
  }

  $(this).parents('.task-item').addClass('completed')
  $(this).addClass('hidden')
  $(this).siblings('.update-task-button').addClass('hidden')
  $(this).parents('.task-text').siblings('.edit-task-button').addClass('hidden')
  $(this).parents('.task-text').siblings('.delete-task-button').addClass('hidden')
})