<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Projeto agendamento de consulta Hospitalar

1- va no seu banco de dados crie um banco.
2- va no .env do laravel e passe DB_DATABASE, DB_USERNAME , DB_PASSWORD.
![image](https://user-images.githubusercontent.com/81827714/189545957-25f56ef1-41ae-46e3-82d3-5b134539a8c8.png)

3- rode o comando php artisan db:seed com esse comando ele vai rodar o SEEDERS que se encontra em database/seeders com isso vai gerar os logins na tabela USERS
e vai gerar tambem os planos de saude, especialidades e procedimentos essas tabelas vai ser povoadas.

4- depois digite o comando para levantar o serve = php artisan serve

5- com isso você ja pode usar as rotas.


6- para te ajuda você vai fazer o seguinte vai copiar esse codigo a baixo vai bota dentro do bloco de notas e salva antes de salva você bota .json 
EX:. api.json depois de fazer isso voce pode importa esse arquivo no seu POSTMAN ou INSOMNIA. AI você vai ter todas as rotas para usar a API

{
	"info": {
		"_postman_id": "08123c28-bb34-4dc9-aeaf-c19fa4eae3bb",
		"name": "agendamento_tisaude-homologacao",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "19379896"
	},
	"item": [
		{
			"name": "login",
			"item": [
				{
					"name": "login_post",
					"request": {
						"method": "POST",
						"header": [],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "email",
									"value": "alex17_sv@hotmail.com",
									"type": "text"
								},
								{
									"key": "password",
									"value": "1234",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/login",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"login"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "cadastro/especialidade",
			"item": [
				{
					"name": "cadastro/especialidade-STORE",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc0OTQ0MSwiZXhwIjoxNjYyNzUzMDQxLCJuYmYiOjE2NjI3NDk0NDEsImp0aSI6IkltWkVpT0hNb0Z3WGNLTXQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.4D7Aucqx390WTFGnuBfs2wreIZZtY7P27uUMQ7nl9hE",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "espec_codigo",
									"value": "5",
									"type": "text"
								},
								{
									"key": "espec_nome",
									"value": "a",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/especialidade",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"especialidade"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/especialidade-UPDATE",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc0OTQ0MSwiZXhwIjoxNjYyNzUzMDQxLCJuYmYiOjE2NjI3NDk0NDEsImp0aSI6IkltWkVpT0hNb0Z3WGNLTXQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.4D7Aucqx390WTFGnuBfs2wreIZZtY7P27uUMQ7nl9hE",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "espec_codigo",
									"value": "4",
									"type": "text"
								},
								{
									"key": "espec_nome",
									"value": "b",
									"type": "text",
									"disabled": true
								},
								{
									"key": "_method",
									"value": "put",
									"type": "text",
									"disabled": true
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/especialidade/1",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"especialidade",
								"1"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/especialidade-DELETE",
					"request": {
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc0OTQ0MSwiZXhwIjoxNjYyNzUzMDQxLCJuYmYiOjE2NjI3NDk0NDEsImp0aSI6IkltWkVpT0hNb0Z3WGNLTXQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.4D7Aucqx390WTFGnuBfs2wreIZZtY7P27uUMQ7nl9hE",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/especialidade/5",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"especialidade",
								"5"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/especialidade-show",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc0OTQ0MSwiZXhwIjoxNjYyNzUzMDQxLCJuYmYiOjE2NjI3NDk0NDEsImp0aSI6IkltWkVpT0hNb0Z3WGNLTXQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.4D7Aucqx390WTFGnuBfs2wreIZZtY7P27uUMQ7nl9hE",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/especialidade/1",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"especialidade",
								"1"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/especialidade-index",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc1OTM1OCwiZXhwIjoxNjYyNzYyOTU4LCJuYmYiOjE2NjI3NTkzNTgsImp0aSI6ImVjeVhLR1lSVGlycmViaksiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ._I8MXP3uMWJYdkd7EJX1G103DlUHguVKJemYXJdCdRI",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/especialidade",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"especialidade"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "cadastro/medico",
			"item": [
				{
					"name": "cadastro/medico-Store",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjg1MDAwMiwiZXhwIjoxNjYyODUzNjAyLCJuYmYiOjE2NjI4NTAwMDIsImp0aSI6IkZHNXl1ajNmdjJoeTZHMW0iLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.RveZP_Hpd0M2ozas1PYJIs3z73eklspppeMqPkrkOjk",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "especialidade_id",
									"value": "3",
									"type": "text"
								},
								{
									"key": "med_codigo",
									"value": "14",
									"type": "text"
								},
								{
									"key": "med_nome",
									"value": "thiago",
									"type": "text"
								},
								{
									"key": "med_CRM",
									"value": "15",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/medico",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"medico"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/medico-Update",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc1OTM1OCwiZXhwIjoxNjYyNzYyOTU4LCJuYmYiOjE2NjI3NTkzNTgsImp0aSI6ImVjeVhLR1lSVGlycmViaksiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ._I8MXP3uMWJYdkd7EJX1G103DlUHguVKJemYXJdCdRI",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "especialidade_id",
									"value": "4",
									"type": "text"
								},
								{
									"key": "med_codigo",
									"value": "",
									"type": "text"
								},
								{
									"key": "med_nome",
									"value": "alexrobem",
									"type": "text",
									"disabled": true
								},
								{
									"key": "med_CRM",
									"value": "",
									"type": "text"
								},
								{
									"key": "_method",
									"value": "put",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/medico/1",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"medico",
								"1"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/medico-Delete",
					"request": {
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc1OTM1OCwiZXhwIjoxNjYyNzYyOTU4LCJuYmYiOjE2NjI3NTkzNTgsImp0aSI6ImVjeVhLR1lSVGlycmViaksiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ._I8MXP3uMWJYdkd7EJX1G103DlUHguVKJemYXJdCdRI",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/medico/5",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"medico",
								"5"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/medico-Show",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc1OTM1OCwiZXhwIjoxNjYyNzYyOTU4LCJuYmYiOjE2NjI3NTkzNTgsImp0aSI6ImVjeVhLR1lSVGlycmViaksiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ._I8MXP3uMWJYdkd7EJX1G103DlUHguVKJemYXJdCdRI",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/medico/4",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"medico",
								"4"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/medico-Index",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc1OTM1OCwiZXhwIjoxNjYyNzYyOTU4LCJuYmYiOjE2NjI3NTkzNTgsImp0aSI6ImVjeVhLR1lSVGlycmViaksiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ._I8MXP3uMWJYdkd7EJX1G103DlUHguVKJemYXJdCdRI",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/medico",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"medico"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "cadastro/planosaude",
			"item": [
				{
					"name": "cadastro/planosaude-Store",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc3NDk2MywiZXhwIjoxNjYyNzc4NTYzLCJuYmYiOjE2NjI3NzQ5NjMsImp0aSI6Img0YlhnUWRaZ3JyS0dQcmgiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.VaO4Xiht1TWHBbImmwYjCLZ2dGVwE-NhO-yJy-bhMNM",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "plano_nome",
									"value": "sull",
									"type": "text"
								},
								{
									"key": "plan_codigo",
									"value": "12",
									"type": "text"
								},
								{
									"key": "plano_descricao",
									"value": "legal",
									"type": "text"
								},
								{
									"key": "plano_telefone",
									"value": "+99(99)9999-9990",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/planosaude",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"planosaude"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/planosaude-Update",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc3NDk2MywiZXhwIjoxNjYyNzc4NTYzLCJuYmYiOjE2NjI3NzQ5NjMsImp0aSI6Img0YlhnUWRaZ3JyS0dQcmgiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.VaO4Xiht1TWHBbImmwYjCLZ2dGVwE-NhO-yJy-bhMNM",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "plano_nome",
									"value": "sulls",
									"type": "text"
								},
								{
									"key": "plan_codigo",
									"value": "45",
									"type": "text"
								},
								{
									"key": "plano_descricao",
									"value": "sul america",
									"type": "text"
								},
								{
									"key": "plano_telefone",
									"value": "+99(99)9999-9999",
									"type": "text",
									"disabled": true
								},
								{
									"key": "_method",
									"value": "put",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/planosaude/5",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"planosaude",
								"5"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/planosaude-Deletar",
					"request": {
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc2MzE2OSwiZXhwIjoxNjYyNzY2NzY5LCJuYmYiOjE2NjI3NjMxNjksImp0aSI6Ik9Ed2Rkd3BCbExyM2dGZWQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ._YgL15FyPyLj7aQ79cH5M5VppjG7rMs_-jVvKBH13HY",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "plan_codigo",
									"value": "5",
									"type": "text",
									"disabled": true
								},
								{
									"key": "plano_descricao",
									"value": "sul america",
									"type": "text",
									"disabled": true
								},
								{
									"key": "plano_telefone",
									"value": "555555",
									"type": "text",
									"disabled": true
								},
								{
									"key": "_method",
									"value": "put",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/planosaude/4",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"planosaude",
								"4"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/planosaude-Show",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc2MzE2OSwiZXhwIjoxNjYyNzY2NzY5LCJuYmYiOjE2NjI3NjMxNjksImp0aSI6Ik9Ed2Rkd3BCbExyM2dGZWQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ._YgL15FyPyLj7aQ79cH5M5VppjG7rMs_-jVvKBH13HY",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/planosaude/4",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"planosaude",
								"4"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/planosaude-Index",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc2MzE2OSwiZXhwIjoxNjYyNzY2NzY5LCJuYmYiOjE2NjI3NjMxNjksImp0aSI6Ik9Ed2Rkd3BCbExyM2dGZWQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ._YgL15FyPyLj7aQ79cH5M5VppjG7rMs_-jVvKBH13HY",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/planosaude",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"planosaude"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "cadastro/paciente",
			"item": [
				{
					"name": "cadastro/paciente-Store",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzNDg2NCwiZXhwIjoxNjYyODM4NDY0LCJuYmYiOjE2NjI4MzQ4NjQsImp0aSI6IjY2SWxoZGxFV01EemJuY00iLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.BsJo1Av9jQgZ3N1oRJo6d7m5nqeP-P6VS-UGMBOvatY",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "pac_codigo",
									"value": "4",
									"type": "text"
								},
								{
									"key": "pac_nome",
									"value": "alex22",
									"type": "text"
								},
								{
									"key": "pac_telefones",
									"value": "+99(99)9999-9929",
									"type": "text"
								},
								{
									"key": "pac_dataNascimento",
									"value": "01/05/2020",
									"type": "text"
								},
								{
									"key": "plano_saude_id",
									"value": "1",
									"type": "text"
								},
								{
									"key": "nr_contrato",
									"value": "6",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/paciente",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"paciente"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/paciente-Update",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc4MjM1MCwiZXhwIjoxNjYyNzg1OTUwLCJuYmYiOjE2NjI3ODIzNTAsImp0aSI6IlQ1TXBPODN6UEI4ZWJvOXEiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.37yB5rqgIrSHpjIV4l2bxUV2f1-Jo3TFSnVU3YdwBDQ",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "pac_codigo",
									"value": "3",
									"type": "text"
								},
								{
									"key": "pac_nome",
									"value": "alex22",
									"type": "text"
								},
								{
									"key": "pac_telefones",
									"value": "+99(99)9999-9928",
									"type": "text"
								},
								{
									"key": "pac_dataNascimento",
									"value": "01/05/2020",
									"type": "text"
								},
								{
									"key": "plano_saude_id",
									"value": "2",
									"type": "text"
								},
								{
									"key": "nr_contrato",
									"value": "4",
									"type": "text"
								},
								{
									"key": "_method",
									"value": "put",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/paciente/3",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"paciente",
								"3"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/paciente-Show",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzNDg2NCwiZXhwIjoxNjYyODM4NDY0LCJuYmYiOjE2NjI4MzQ4NjQsImp0aSI6IjY2SWxoZGxFV01EemJuY00iLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.BsJo1Av9jQgZ3N1oRJo6d7m5nqeP-P6VS-UGMBOvatY",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/paciente/1",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"paciente",
								"1"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/paciente-Delete",
					"request": {
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzNDg2NCwiZXhwIjoxNjYyODM4NDY0LCJuYmYiOjE2NjI4MzQ4NjQsImp0aSI6IjY2SWxoZGxFV01EemJuY00iLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.BsJo1Av9jQgZ3N1oRJo6d7m5nqeP-P6VS-UGMBOvatY",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/paciente/3",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"paciente",
								"3"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/paciente-index",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzNDg2NCwiZXhwIjoxNjYyODM4NDY0LCJuYmYiOjE2NjI4MzQ4NjQsImp0aSI6IjY2SWxoZGxFV01EemJuY00iLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.BsJo1Av9jQgZ3N1oRJo6d7m5nqeP-P6VS-UGMBOvatY",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/paciente",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"paciente"
							]
						}
					},
					"response": []
				},
				{
					"name": "mudar/planoSaude",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzMDg4OSwiZXhwIjoxNjYyODM0NDg5LCJuYmYiOjE2NjI4MzA4ODksImp0aSI6IjlwSHNhb3hzaVJuRU5SWEwiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.KKvZ9JDvAtOeZTFhlKD19vomPzU3zvAL9k9WfLsamDU",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "pac_codigo",
									"value": "3",
									"type": "text"
								},
								{
									"key": "plano_saude_id",
									"value": "3",
									"type": "text"
								},
								{
									"key": "plano_novo",
									"value": "1",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "127.0.0.1:8000/api/adm/mudar/planoSaude",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"adm",
								"mudar",
								"planoSaude"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "cadastro/procedimento",
			"item": [
				{
					"name": "cadastro/procedimento-Store",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzODkwMiwiZXhwIjoxNjYyODQyNTAyLCJuYmYiOjE2NjI4Mzg5MDIsImp0aSI6Ikpiem5YREVmNG9KNlJlYUIiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.TIH-yUOjB6HSuF-97pPh_FiY3jkpsZpRsd1HTeOIQAA",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "proc_codigo",
									"value": "4",
									"type": "text"
								},
								{
									"key": "proc_nome",
									"value": "pele especifica",
									"type": "text"
								},
								{
									"key": "proc_valor",
									"value": "400.00",
									"type": "text"
								},
								{
									"key": "proc_especialidade",
									"value": "dermatologista",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/procedimento",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"procedimento"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/procedimento-Update",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzODkwMiwiZXhwIjoxNjYyODQyNTAyLCJuYmYiOjE2NjI4Mzg5MDIsImp0aSI6Ikpiem5YREVmNG9KNlJlYUIiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.TIH-yUOjB6HSuF-97pPh_FiY3jkpsZpRsd1HTeOIQAA",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "proc_codigo",
									"value": "4",
									"type": "text"
								},
								{
									"key": "proc_nome",
									"value": "pele especifica",
									"type": "text"
								},
								{
									"key": "proc_valor",
									"value": "400.50",
									"type": "text"
								},
								{
									"key": "proc_especialidade",
									"value": "dermatologista",
									"type": "text"
								},
								{
									"key": "_method",
									"value": "put",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/procedimento/4",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"procedimento",
								"4"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/procedimento-Delete",
					"request": {
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzODkwMiwiZXhwIjoxNjYyODQyNTAyLCJuYmYiOjE2NjI4Mzg5MDIsImp0aSI6Ikpiem5YREVmNG9KNlJlYUIiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.TIH-yUOjB6HSuF-97pPh_FiY3jkpsZpRsd1HTeOIQAA",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/procedimento/4",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"procedimento",
								"4"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/procedimento-show",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzODkwMiwiZXhwIjoxNjYyODQyNTAyLCJuYmYiOjE2NjI4Mzg5MDIsImp0aSI6Ikpiem5YREVmNG9KNlJlYUIiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.TIH-yUOjB6HSuF-97pPh_FiY3jkpsZpRsd1HTeOIQAA",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/procedimento/3",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"procedimento",
								"3"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/procedimento-index",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzODkwMiwiZXhwIjoxNjYyODQyNTAyLCJuYmYiOjE2NjI4Mzg5MDIsImp0aSI6Ikpiem5YREVmNG9KNlJlYUIiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.TIH-yUOjB6HSuF-97pPh_FiY3jkpsZpRsd1HTeOIQAA",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/procedimento",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"procedimento"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "cadastro/consulta",
			"item": [
				{
					"name": "cadastro/consulta-Store",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkwMjYzMiwiZXhwIjoxNjYyOTA2MjMyLCJuYmYiOjE2NjI5MDI2MzIsImp0aSI6IjJzNFl5Z004S2FTUXc0djMiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.-KlfIn_N0ZljFqbiAa4uyFM4KhIvLAx-Z6lqmnyVSjo",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "paciente_id",
									"value": "2",
									"type": "text"
								},
								{
									"key": "vinculo_id",
									"value": "",
									"type": "text"
								},
								{
									"key": "medico_id",
									"value": "3",
									"type": "text"
								},
								{
									"key": "cons_codigo",
									"value": "7",
									"type": "text"
								},
								{
									"key": "cons_data_hora",
									"value": "01/02/2020-20:50",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/consulta",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"consulta"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/consulta-update",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjg1NDQ2MiwiZXhwIjoxNjYyODU4MDYyLCJuYmYiOjE2NjI4NTQ0NjIsImp0aSI6Ijg3R3k0UzdXTE1zdFJranQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.G-0r59z9f0u83rIRxUwWDKBrrXyNsgq_uHM33jcrMW0",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "paciente_id",
									"value": "2",
									"type": "text"
								},
								{
									"key": "vinculo_id",
									"value": "1",
									"type": "text"
								},
								{
									"key": "medico_id",
									"value": "2",
									"type": "text"
								},
								{
									"key": "cons_codigo",
									"value": "5",
									"type": "text"
								},
								{
									"key": "cons_data_hora",
									"value": "01/02/2020-20:17",
									"type": "text"
								},
								{
									"key": "_method",
									"value": "put",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/consulta/7",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"consulta",
								"7"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/consulta-Delete",
					"request": {
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjg1NDQ2MiwiZXhwIjoxNjYyODU4MDYyLCJuYmYiOjE2NjI4NTQ0NjIsImp0aSI6Ijg3R3k0UzdXTE1zdFJranQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.G-0r59z9f0u83rIRxUwWDKBrrXyNsgq_uHM33jcrMW0",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/consulta/7",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"consulta",
								"7"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/consulta-Show",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjg1NDQ2MiwiZXhwIjoxNjYyODU4MDYyLCJuYmYiOjE2NjI4NTQ0NjIsImp0aSI6Ijg3R3k0UzdXTE1zdFJranQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.G-0r59z9f0u83rIRxUwWDKBrrXyNsgq_uHM33jcrMW0",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/consulta/5",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"consulta",
								"5"
							]
						}
					},
					"response": []
				},
				{
					"name": "cadastro/consulta-Index",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkwMjYzMiwiZXhwIjoxNjYyOTA2MjMyLCJuYmYiOjE2NjI5MDI2MzIsImp0aSI6IjJzNFl5Z004S2FTUXc0djMiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.-KlfIn_N0ZljFqbiAa4uyFM4KhIvLAx-Z6lqmnyVSjo",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/consulta",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"consulta"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "cons_proc",
			"item": [
				{
					"name": "cons/proc-Store",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxMjQzOCwiZXhwIjoxNjYyOTE2MDM4LCJuYmYiOjE2NjI5MTI0MzgsImp0aSI6IlpjcjFWUkRMbVljRzhnTUYiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.bNHQkRqXWWoFYr6s6ZIRaUtdUHcCy5A7VY5lTSkvGVk",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "consulta_id",
									"value": "8",
									"type": "text"
								},
								{
									"key": "procedimento_id",
									"value": "3",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/cons_proc",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"cons_proc"
							]
						}
					},
					"response": []
				},
				{
					"name": "cons/proc-Store Copy",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxMjQzOCwiZXhwIjoxNjYyOTE2MDM4LCJuYmYiOjE2NjI5MTI0MzgsImp0aSI6IlpjcjFWUkRMbVljRzhnTUYiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.bNHQkRqXWWoFYr6s6ZIRaUtdUHcCy5A7VY5lTSkvGVk",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "consulta_id",
									"value": "8",
									"type": "text"
								},
								{
									"key": "procedimento_id",
									"value": "3",
									"type": "text"
								},
								{
									"key": "_method",
									"value": "put",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/cons_proc/4",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"cons_proc",
								"4"
							]
						}
					},
					"response": []
				},
				{
					"name": "cons/proc-Delete",
					"request": {
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxMjQzOCwiZXhwIjoxNjYyOTE2MDM4LCJuYmYiOjE2NjI5MTI0MzgsImp0aSI6IlpjcjFWUkRMbVljRzhnTUYiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.bNHQkRqXWWoFYr6s6ZIRaUtdUHcCy5A7VY5lTSkvGVk",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/cons_proc/4",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"cons_proc",
								"4"
							]
						}
					},
					"response": []
				},
				{
					"name": "cons/proc-Show",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxMjQzOCwiZXhwIjoxNjYyOTE2MDM4LCJuYmYiOjE2NjI5MTI0MzgsImp0aSI6IlpjcjFWUkRMbVljRzhnTUYiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.bNHQkRqXWWoFYr6s6ZIRaUtdUHcCy5A7VY5lTSkvGVk",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/cons_proc/3",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"cons_proc",
								"3"
							]
						}
					},
					"response": []
				},
				{
					"name": "cons/proc-Index",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxMjQzOCwiZXhwIjoxNjYyOTE2MDM4LCJuYmYiOjE2NjI5MTI0MzgsImp0aSI6IlpjcjFWUkRMbVljRzhnTUYiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.bNHQkRqXWWoFYr6s6ZIRaUtdUHcCy5A7VY5lTSkvGVk",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://homologacao-teste.audax.mobi/api/adm/cadastro/cons_proc",
							"protocol": "http",
							"host": [
								"homologacao-teste",
								"audax",
								"mobi"
							],
							"path": [
								"api",
								"adm",
								"cadastro",
								"cons_proc"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "rota_funcionario",
			"item": [
				{
					"name": "cadastro/consulta-FUNC",
					"item": [
						{
							"name": "cadastro/consulta-Store",
							"request": {
								"method": "POST",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxNjU5MSwiZXhwIjoxNjYyOTIwMTkxLCJuYmYiOjE2NjI5MTY1OTEsImp0aSI6IjBDQ1pORHRIemRoUmpLc2QiLCJzdWIiOjIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.nMNrQKwSaf5_c_In1Ms4RMT_qcDhE4ttj8ynTiKDN7k",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": [
										{
											"key": "paciente_id",
											"value": "6",
											"type": "text"
										},
										{
											"key": "vinculo_id",
											"value": "6",
											"type": "text"
										},
										{
											"key": "medico_id",
											"value": "1",
											"type": "text"
										},
										{
											"key": "cons_codigo",
											"value": "9",
											"type": "text"
										},
										{
											"key": "cons_data_hora",
											"value": "01/02/2022-21:50",
											"type": "text"
										}
									]
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/consulta",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"consulta"
									]
								}
							},
							"response": []
						},
						{
							"name": "cadastro/consulta-update",
							"request": {
								"method": "POST",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjg1NDQ2MiwiZXhwIjoxNjYyODU4MDYyLCJuYmYiOjE2NjI4NTQ0NjIsImp0aSI6Ijg3R3k0UzdXTE1zdFJranQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.G-0r59z9f0u83rIRxUwWDKBrrXyNsgq_uHM33jcrMW0",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": [
										{
											"key": "paciente_id",
											"value": "2",
											"type": "text"
										},
										{
											"key": "vinculo_id",
											"value": "1",
											"type": "text"
										},
										{
											"key": "medico_id",
											"value": "2",
											"type": "text"
										},
										{
											"key": "cons_codigo",
											"value": "5",
											"type": "text"
										},
										{
											"key": "cons_data_hora",
											"value": "01/02/2020-20:17",
											"type": "text"
										},
										{
											"key": "_method",
											"value": "put",
											"type": "text"
										}
									]
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/consulta/7",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"consulta",
										"7"
									]
								}
							},
							"response": []
						},
						{
							"name": "cadastro/consulta-Delete",
							"request": {
								"method": "DELETE",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjg1NDQ2MiwiZXhwIjoxNjYyODU4MDYyLCJuYmYiOjE2NjI4NTQ0NjIsImp0aSI6Ijg3R3k0UzdXTE1zdFJranQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.G-0r59z9f0u83rIRxUwWDKBrrXyNsgq_uHM33jcrMW0",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": []
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/consulta/7",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"consulta",
										"7"
									]
								}
							},
							"response": []
						},
						{
							"name": "cadastro/consulta-Show",
							"protocolProfileBehavior": {
								"disableBodyPruning": true
							},
							"request": {
								"method": "GET",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjg1NDQ2MiwiZXhwIjoxNjYyODU4MDYyLCJuYmYiOjE2NjI4NTQ0NjIsImp0aSI6Ijg3R3k0UzdXTE1zdFJranQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.G-0r59z9f0u83rIRxUwWDKBrrXyNsgq_uHM33jcrMW0",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": []
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/consulta/5",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"consulta",
										"5"
									]
								}
							},
							"response": []
						},
						{
							"name": "cadastro/consulta-Index",
							"protocolProfileBehavior": {
								"disableBodyPruning": true
							},
							"request": {
								"method": "GET",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkwMjYzMiwiZXhwIjoxNjYyOTA2MjMyLCJuYmYiOjE2NjI5MDI2MzIsImp0aSI6IjJzNFl5Z004S2FTUXc0djMiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.-KlfIn_N0ZljFqbiAa4uyFM4KhIvLAx-Z6lqmnyVSjo",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": []
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/consulta",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"consulta"
									]
								}
							},
							"response": []
						}
					]
				},
				{
					"name": "cons_proc-FUNC",
					"item": [
						{
							"name": "cons/proc-Store",
							"request": {
								"method": "POST",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxNjU5MSwiZXhwIjoxNjYyOTIwMTkxLCJuYmYiOjE2NjI5MTY1OTEsImp0aSI6IjBDQ1pORHRIemRoUmpLc2QiLCJzdWIiOjIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.nMNrQKwSaf5_c_In1Ms4RMT_qcDhE4ttj8ynTiKDN7k",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": [
										{
											"key": "consulta_id",
											"value": "11",
											"type": "text"
										},
										{
											"key": "procedimento_id",
											"value": "1",
											"type": "text"
										}
									]
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/cons_proc",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"cons_proc"
									]
								}
							},
							"response": []
						},
						{
							"name": "cons/proc-Update",
							"request": {
								"method": "POST",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxMjQzOCwiZXhwIjoxNjYyOTE2MDM4LCJuYmYiOjE2NjI5MTI0MzgsImp0aSI6IlpjcjFWUkRMbVljRzhnTUYiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.bNHQkRqXWWoFYr6s6ZIRaUtdUHcCy5A7VY5lTSkvGVk",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": [
										{
											"key": "consulta_id",
											"value": "8",
											"type": "text"
										},
										{
											"key": "procedimento_id",
											"value": "3",
											"type": "text"
										},
										{
											"key": "_method",
											"value": "put",
											"type": "text"
										}
									]
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/cons_proc/4",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"cons_proc",
										"4"
									]
								}
							},
							"response": []
						},
						{
							"name": "cons/proc-Delete",
							"request": {
								"method": "DELETE",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxMjQzOCwiZXhwIjoxNjYyOTE2MDM4LCJuYmYiOjE2NjI5MTI0MzgsImp0aSI6IlpjcjFWUkRMbVljRzhnTUYiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.bNHQkRqXWWoFYr6s6ZIRaUtdUHcCy5A7VY5lTSkvGVk",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": []
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/cons_proc/4",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"cons_proc",
										"4"
									]
								}
							},
							"response": []
						},
						{
							"name": "cons/proc-Show",
							"protocolProfileBehavior": {
								"disableBodyPruning": true
							},
							"request": {
								"method": "GET",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxMjQzOCwiZXhwIjoxNjYyOTE2MDM4LCJuYmYiOjE2NjI5MTI0MzgsImp0aSI6IlpjcjFWUkRMbVljRzhnTUYiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.bNHQkRqXWWoFYr6s6ZIRaUtdUHcCy5A7VY5lTSkvGVk",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": []
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/cons_proc/3",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"cons_proc",
										"3"
									]
								}
							},
							"response": []
						},
						{
							"name": "cons/proc-Index",
							"protocolProfileBehavior": {
								"disableBodyPruning": true
							},
							"request": {
								"method": "GET",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxMjQzOCwiZXhwIjoxNjYyOTE2MDM4LCJuYmYiOjE2NjI5MTI0MzgsImp0aSI6IlpjcjFWUkRMbVljRzhnTUYiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.bNHQkRqXWWoFYr6s6ZIRaUtdUHcCy5A7VY5lTSkvGVk",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": []
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/cons_proc",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"cons_proc"
									]
								}
							},
							"response": []
						}
					]
				},
				{
					"name": "select-table",
					"item": [
						{
							"name": "selecttable/plano_saude",
							"request": {
								"method": "GET",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9ob21vbG9nYWNhby10ZXN0ZS5hdWRheC5tb2JpXC9hcGlcL2xvZ2luIiwiaWF0IjoxNjYyOTIxMzgzLCJleHAiOjE2NjI5MjQ5ODMsIm5iZiI6MTY2MjkyMTM4MywianRpIjoiWHZwcmRBcjQxVlJLdm1PRSIsInN1YiI6MiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.aaq1H28ioSxktIsZpt5K5R_u0T9VQ776GuVbdSDQbHQ",
										"type": "text"
									}
								],
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/selecttable/plano_saude",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"selecttable",
										"plano_saude"
									]
								}
							},
							"response": []
						},
						{
							"name": "selecttable/medico",
							"request": {
								"method": "GET",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxNjMxMywiZXhwIjoxNjYyOTE5OTEzLCJuYmYiOjE2NjI5MTYzMTMsImp0aSI6IkdBVm40aUpWZ09qUW5JTTAiLCJzdWIiOjIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.yovtImKP3hSdVKmsJ2sUtPUNpF0Ffrnvkzt1p5T9Dio",
										"type": "text"
									}
								],
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/selecttable/medico",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"selecttable",
										"medico"
									]
								}
							},
							"response": []
						},
						{
							"name": "selecttable/procedimento",
							"request": {
								"method": "GET",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxNTkyNCwiZXhwIjoxNjYyOTE5NTI0LCJuYmYiOjE2NjI5MTU5MjQsImp0aSI6InpvajBEU1hJZlRCZlpPNG0iLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.9lx5BRJaYufeRq9cdsdbsgPpvDb3iohZGZMPTCYn6kw",
										"type": "text"
									}
								],
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/selecttable/procedimento",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"selecttable",
										"procedimento"
									]
								}
							},
							"response": []
						}
					]
				},
				{
					"name": "cadastro/paciente-FUNC",
					"item": [
						{
							"name": "cadastro/paciente-Store",
							"request": {
								"method": "POST",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjkxNjU5MSwiZXhwIjoxNjYyOTIwMTkxLCJuYmYiOjE2NjI5MTY1OTEsImp0aSI6IjBDQ1pORHRIemRoUmpLc2QiLCJzdWIiOjIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.nMNrQKwSaf5_c_In1Ms4RMT_qcDhE4ttj8ynTiKDN7k",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": [
										{
											"key": "pac_codigo",
											"value": "100",
											"type": "text"
										},
										{
											"key": "pac_nome",
											"value": "thiago oliveira",
											"type": "text"
										},
										{
											"key": "pac_telefones",
											"value": "+99(99)0000-0000",
											"type": "text"
										},
										{
											"key": "pac_dataNascimento",
											"value": "01/05/2022",
											"type": "text"
										},
										{
											"key": "plano_saude_id",
											"value": "1",
											"type": "text"
										},
										{
											"key": "nr_contrato",
											"value": "100",
											"type": "text"
										}
									]
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/paciente",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"paciente"
									]
								}
							},
							"response": []
						},
						{
							"name": "cadastro/paciente-Update",
							"request": {
								"method": "POST",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2Mjc4MjM1MCwiZXhwIjoxNjYyNzg1OTUwLCJuYmYiOjE2NjI3ODIzNTAsImp0aSI6IlQ1TXBPODN6UEI4ZWJvOXEiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.37yB5rqgIrSHpjIV4l2bxUV2f1-Jo3TFSnVU3YdwBDQ",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": [
										{
											"key": "pac_codigo",
											"value": "3",
											"type": "text"
										},
										{
											"key": "pac_nome",
											"value": "alex22",
											"type": "text"
										},
										{
											"key": "pac_telefones",
											"value": "+99(99)9999-9928",
											"type": "text"
										},
										{
											"key": "pac_dataNascimento",
											"value": "01/05/2020",
											"type": "text"
										},
										{
											"key": "plano_saude_id",
											"value": "2",
											"type": "text"
										},
										{
											"key": "nr_contrato",
											"value": "4",
											"type": "text"
										},
										{
											"key": "_method",
											"value": "put",
											"type": "text"
										}
									]
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/paciente/3",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"paciente",
										"3"
									]
								}
							},
							"response": []
						},
						{
							"name": "cadastro/paciente-Show",
							"protocolProfileBehavior": {
								"disableBodyPruning": true
							},
							"request": {
								"method": "GET",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzNDg2NCwiZXhwIjoxNjYyODM4NDY0LCJuYmYiOjE2NjI4MzQ4NjQsImp0aSI6IjY2SWxoZGxFV01EemJuY00iLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.BsJo1Av9jQgZ3N1oRJo6d7m5nqeP-P6VS-UGMBOvatY",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": []
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/paciente/1",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"paciente",
										"1"
									]
								}
							},
							"response": []
						},
						{
							"name": "cadastro/paciente-Delete",
							"request": {
								"method": "DELETE",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzNDg2NCwiZXhwIjoxNjYyODM4NDY0LCJuYmYiOjE2NjI4MzQ4NjQsImp0aSI6IjY2SWxoZGxFV01EemJuY00iLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.BsJo1Av9jQgZ3N1oRJo6d7m5nqeP-P6VS-UGMBOvatY",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": []
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/paciente/3",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"paciente",
										"3"
									]
								}
							},
							"response": []
						},
						{
							"name": "cadastro/paciente-index",
							"protocolProfileBehavior": {
								"disableBodyPruning": true
							},
							"request": {
								"method": "GET",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzNDg2NCwiZXhwIjoxNjYyODM4NDY0LCJuYmYiOjE2NjI4MzQ4NjQsImp0aSI6IjY2SWxoZGxFV01EemJuY00iLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.BsJo1Av9jQgZ3N1oRJo6d7m5nqeP-P6VS-UGMBOvatY",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": []
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/cadastro/paciente",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"cadastro",
										"paciente"
									]
								}
							},
							"response": []
						},
						{
							"name": "mudar/planoSaude",
							"request": {
								"method": "POST",
								"header": [
									{
										"key": "Accept",
										"value": "application/json",
										"type": "text"
									},
									{
										"key": "Authorization",
										"value": "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MjgzMDg4OSwiZXhwIjoxNjYyODM0NDg5LCJuYmYiOjE2NjI4MzA4ODksImp0aSI6IjlwSHNhb3hzaVJuRU5SWEwiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.KKvZ9JDvAtOeZTFhlKD19vomPzU3zvAL9k9WfLsamDU",
										"type": "text"
									}
								],
								"body": {
									"mode": "urlencoded",
									"urlencoded": [
										{
											"key": "pac_codigo",
											"value": "3",
											"type": "text"
										},
										{
											"key": "plano_saude_id",
											"value": "3",
											"type": "text"
										},
										{
											"key": "plano_novo",
											"value": "1",
											"type": "text"
										}
									]
								},
								"url": {
									"raw": "http://homologacao-teste.audax.mobi/api/func/mudar/planoSaude",
									"protocol": "http",
									"host": [
										"homologacao-teste",
										"audax",
										"mobi"
									],
									"path": [
										"api",
										"func",
										"mudar",
										"planoSaude"
									]
								}
							},
							"response": []
						}
					]
				}
			]
		}
	]
}

##routas
