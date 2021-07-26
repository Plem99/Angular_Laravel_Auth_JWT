import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  //styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {
  public form: FormGroup;
  constructor(
    private formBuilder: FormBuilder,
    private http: HttpClient,
    private router: Router
  ) {
    this.form = this.formBuilder.group({
      email: '',
      password: ''
    });
   }

  ngOnInit(): void {
  }

  onSubmit = (form: FormGroup): void => {
    this.http.post('http://127.0.0.1:8000/api/login', form.getRawValue(), {
      withCredentials: true
    }).subscribe(res => {
      console.log(res);
      this.router.navigate(['/secure']);
    });
    if (form.valid) {
      console.log(form.getRawValue())
    }
  }
}
