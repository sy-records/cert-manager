# Cert Manager

将本地通过`acme.sh`生成的证书上传到对应云服务的证书服务中，以便于在云服务中使用证书。

## 安装

```bash
composer create-project sy-records/cert-manager
```

## 配置

从`config.example.php`复制一份到`config.php`，并根据实际情况修改配置。

### 环境变量

将对应的云服务的配置写入到系统环境变量中，以便于在脚本中使用。

| 环境变量          | 说明             |
|---------------|----------------|
| TX_SECRET_ID  | 腾讯云的 SecretId  |
| TX_SECRET_KEY | 腾讯云的 SecretKey |

## 使用

```bash
chmod +x tx-cert-manger

# 更新所有配置文件中的证书
./tx-cert-manger

# 更新指定域名的证书
./tx-cert-manger example.com
```
