import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html'
  //styleUrls: ['./register.component.scss']
})
export class RegisterComponent implements OnInit {
  public formRegister: FormGroup;
  constructor(
    private formBuilder: FormBuilder,
    private http: HttpClient,
    private router: Router
  ) {
    this.formRegister = this.formBuilder.group({
      name: '',
      email: '',
      password: ''
    });
  }

  ngOnInit(): void {

  }

  onSubmit = (form: FormGroup): void => {
    this.http.post('http://127.0.0.1:8000/api/register', form.getRawValue())
    .subscribe(res => {
      console.log(res);
      this.router.navigate(['/login']);
    });
    if (form.valid) {
      console.log(form.getRawValue())
    }
  }

}
