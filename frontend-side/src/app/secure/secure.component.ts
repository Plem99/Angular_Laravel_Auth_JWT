import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-secure',
  templateUrl: './secure.component.html',
  //styleUrls: ['./secure.component.scss']
})
export class SecureComponent implements OnInit {
  public message:string  = "No estas Logueado";
  constructor(
    private http: HttpClient
  ) { }

  ngOnInit(): void {
    this.http.get('http://127.0.0.1:8000/api/user',{
      withCredentials: true
    })
    .subscribe(res =>{
      console.log(res);
    },err => {
      console.log(err);
    });
  }

}
