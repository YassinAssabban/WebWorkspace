import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'helha'
})
export class HelhaPipe implements PipeTransform {

  transform(value: any, ...args: any[]): any {
    if(value.length <= 4){
      return value.toUpperCase();
    }
    else{
      const first = value.substring(0, 4).toUpperCase();
      const second = value.substring(4).toLowerCase();
      return first + second;
    }
  }
}
