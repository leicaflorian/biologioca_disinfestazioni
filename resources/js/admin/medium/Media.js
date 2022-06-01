export const methods = {
  getImgThumbUrl (item) {
    if (!item.file_name) {
      return
    }
    const nameArray = item.file_name.split('.')
    const extension = nameArray.pop()
    const thumbName = nameArray.join('') + '-thumb_200.' + "jpg"
    
    return '/' + item.disk + '/' + item.id + '/conversions/' + thumbName
  },
  getImgUrl (item) {
    if (!item.file_name) {
      return
    }

    return '/' + item.disk + '/' + item.id + '/' + item.file_name
  }
}
