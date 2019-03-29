#!/usr/bin/env python
import os
import pandas as pd
import csv
import math

with open("E:/wamp64/www/Personality Prediction/11.txt") as openfile:
    statinfo = os.stat('E:/wamp64/www/Personality Prediction/11.txt')
    size = statinfo.st_size
    f=0 
    k=0
    cond=0
    tl=0
    ope=0
    opa=0
    comm=0
    l1=0
    l=["abstract","assert","boolean","byte","extends","final","finally","import","interface","null","package","super",
        "synchronized","throws","while","void","try","true","throw","this","switch","static","short","return","public",
          "protected","private","new","long","if","int","goto","for","float","false","else","double","do","default","continue",
          "const","class","char","catch","case","break","and","auto","bool","delete","enum","friend","inline","not","or",
          "namespace","operator","sizeof","struct","union","using","virtual","xor"]
    op = ["!", "!=", "%", "%=", "&", "&&", "||", "&=", "(", "{", "[", "*", "*=", "+", "++", "+=" ,"," ,"-", "--", "-=", "." ,"/", "/=", ":", "::", "<", "<<", "<<=",
             "<=", "=", "==", ">", ">=", ">>", ">>=", "?", "^^=", "|", "|=", "~" ,";", "&=", "“" ,"‘","#", "##"]
    dummy = []
    dummy1 = []
    for line in openfile:
        for part in line.split():
            if "//" in part:
                comm+=1
                break
            if "/*" in part:
                comm+=1
                l1=1
            if "*/" in part:
                l=0
            if(l1==0):
                if "for" in part:
                    f+=1
                if "while" in part:
                    f+=1
                if "do" in part:
                    f+=1
                for i in range(0,len(l)):
                    if(part==l[i]):
                        k+=1
                        break
                d=0
                d1=0
                q=0
                for j in range(0,len(part)):
                    if(((part[j]>='a' and part[j]<='z') or (part[j]>='A' and part[j]<='Z') or (part[j]>="0" and part[j]<="9")) and d==0):
                        opa+=1
                        dummy1.append(part[j])
                        d=1
                        d1=0
                    else:
                        if(part[j-1]!=part[j]):
                            d1=0
                        if(d1==0):
                            for j1 in range(0,len(op)):
                                if(part[j]==op[j1] and d1==0):
                                    dummy.append(part[j])
                                    ope+=1
                                    d1=1
                                    d=0
                                    q=0
                                    break
                if "if" in part:
                    cond+=1

            
        
            
        tl+=1
    dummy = set(dummy)
    diop = len(dummy)
    dummy1 = set(dummy1)
    diopra = len(dummy1)
#     print(diopra)
    n1=diop
    n2=diopra
    N1=ope
    N2=opa
    n = n1+n1 # program vocabulary
    N = N1+N2 # program length
    V = N * math.log(n,2) # program volume
    D = (n1/2)*(N2/n2) # program difficulty
    E = D*V # program effort
    T = E/18 # Time for execution
    B = V/3000 # Number of delivered bugs 
    
#     with open('Desktop/se.csv','a',newline='') as new_file:
#         csv_writer = csv.writer(new_file)
#         csv_writer.writerow([n,N,V,D,E,T,B,f,k,cond,tl,ope,opa,comm,'2'])


df = pd.read_csv('C:/Users/om/Desktop/se.csv')

x = df[['P_VOC','P_LEN','P_VOL','P_DIFF','P_EFFO','E_TIME','NO_ERR','NO_LOP','NO_KEY','NO_CON','NO_LIN','NO_OPE','NO_OPA','NO_COM']]
y = df['STATUS']

from sklearn.neighbors import KNeighborsClassifier
from sklearn.metrics import accuracy_score

knn = KNeighborsClassifier(n_neighbors=1)
knn.fit(x,y)
y_pred = knn.predict([[n,N,V,D,E,T,B,f,k,cond,tl,ope,opa,comm]])
if(y_pred==0):
    txt = 'Legendary Grandmaster'
elif(y_pred==1):
    txt = 'Master'
elif(y_pred==2):
    txt = 'Specialist'
elif(y_pred==3):
    txt = 'Pupil'
else:
    txt = 'Newbie'

file1 = open("E:/wamp64/www/Personality Prediction/12.txt","w")
file1.write(txt + "\n")
file1.close() 